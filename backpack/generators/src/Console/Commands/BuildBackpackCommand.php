<?php

namespace Backpack\Generators\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class BuildBackpackCommand extends Command
{
    use \Backpack\CRUD\app\Console\Commands\Traits\PrettyCommandOutput;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'backpack:build';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create CRUDs for all Models that don\'t already have one.';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // make a list of all models
        $models = $this->getModels(base_path('app'));

        if (! count($models)) {
            $this->errorBlock('No models found.');

            return;
        }

        foreach ($models as $key => $model) {
            $this->call('backpack:crud', ['name' => $model]);
            $this->line('  <fg=gray>----------</>');
        }

        $this->deleteLines();
    }

    private function getModels($path)
    {
        $out = [];
        $results = scandir($path);

        foreach ($results as $result) {
            if ($result === '.' or $result === '..') {
                continue;
            }
            $filename = $path.'/'.$result;

            if (is_dir($filename)) {
                $out = array_merge($out, $this->getModels($filename));
            } else {
                $file_content = file_get_contents($filename);
                if (Str::contains($file_content, 'Illuminate\Database\Eloquent\Model') &&
                    Str::contains($file_content, 'extends Model')) {
                    $out[] = Arr::last(explode('/', substr($filename, 0, -4)));
                }
            }
        }

        return $out;
    }
}
