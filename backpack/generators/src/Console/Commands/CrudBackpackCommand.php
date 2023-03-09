<?php

namespace Backpack\Generators\Console\Commands;

use Illuminate\Console\GeneratorCommand;
use Illuminate\Support\Str;

class CrudBackpackCommand extends GeneratorCommand
{
    use \Backpack\CRUD\app\Console\Commands\Traits\PrettyCommandOutput;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'backpack:crud {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a CRUD interface: Controller, Model, Request';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $name = $this->getNameInput();
        $nameTitle = ucfirst(Str::camel($name));
        $nameKebab = Str::kebab($nameTitle);
        $namePlural = ucfirst(str_replace('-', ' ', Str::plural($nameKebab)));

        // Validate if the name is reserved
        if ($this->isReservedName($nameTitle)) {
            $this->errorBlock("The name '$nameTitle' is reserved by PHP.");

            return false;
        }

        $this->infoBlock("Creating CRUD for the <fg=blue>$nameTitle</> model:");

        // Create the CRUD Model and show output
        $this->call('backpack:crud-model', ['name' => $nameTitle]);

        // Create the CRUD Controller and show output
        $this->call('backpack:crud-controller', ['name' => $nameTitle]);

        // Create the CRUD Request and show output
        $this->call('backpack:crud-request', ['name' => $nameTitle]);

        // Create the CRUD route
        $this->call('backpack:add-custom-route', [
            'code' => "Route::crud('$nameKebab', '{$nameTitle}CrudController');",
        ]);

        // Create the sidebar item
        $this->call('backpack:add-sidebar-content', [
            'code' => "<li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ backpack_url('$nameKebab') }}\"><i class=\"nav-icon la la-question\"></i> $namePlural</a></li>",
        ]);

        // if the application uses cached routes, we should rebuild the cache so the previous added route will
        // be acessible without manually clearing the route cache.
        if (app()->routesAreCached()) {
            $this->call('route:cache');
        }

        $url = Str::of(config('app.url'))->finish('/')->append('admin/')->append($nameKebab);

        $this->newLine();
        $this->line("  Done! Go to <fg=blue>$url</> to see the CRUD in action.");
        $this->newLine();
    }

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return false;
    }
}
