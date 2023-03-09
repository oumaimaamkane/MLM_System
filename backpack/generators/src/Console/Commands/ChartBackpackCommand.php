<?php

namespace Backpack\Generators\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;

class ChartBackpackCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'backpack:chart {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a ChartController and route';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $studlyName = Str::studly($this->argument('name')); // aka Pascal Case
        $kebabName = Str::kebab($this->argument('name'));

        // Create the ChartController and show output
        $this->call('backpack:chart-controller', ['name' => $studlyName]);

        // Create the chart route
        $this->call('backpack:add-custom-route', [
            'code' => "Route::get('charts/{$kebabName}', 'Charts\\{$studlyName}ChartController@response')->name('charts.{$kebabName}.index');",
        ]);
    }
}
