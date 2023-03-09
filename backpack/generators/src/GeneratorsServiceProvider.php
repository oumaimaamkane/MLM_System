<?php

namespace Backpack\Generators;

use Backpack\Generators\Console\Commands\BuildBackpackCommand;
use Backpack\Generators\Console\Commands\ChartBackpackCommand;
use Backpack\Generators\Console\Commands\ChartControllerBackpackCommand;
use Backpack\Generators\Console\Commands\ConfigBackpackCommand;
use Backpack\Generators\Console\Commands\CrudBackpackCommand;
use Backpack\Generators\Console\Commands\CrudControllerBackpackCommand;
use Backpack\Generators\Console\Commands\CrudModelBackpackCommand;
use Backpack\Generators\Console\Commands\CrudOperationBackpackCommand;
use Backpack\Generators\Console\Commands\CrudRequestBackpackCommand;
use Backpack\Generators\Console\Commands\ModelBackpackCommand;
use Backpack\Generators\Console\Commands\PageBackpackCommand;
use Backpack\Generators\Console\Commands\PageControllerBackpackCommand;
use Backpack\Generators\Console\Commands\RequestBackpackCommand;
use Backpack\Generators\Console\Commands\ViewBackpackCommand;
use Illuminate\Support\ServiceProvider;

class GeneratorsServiceProvider extends ServiceProvider
{
    protected $commands = [
        BuildBackpackCommand::class,
        ConfigBackpackCommand::class,
        CrudModelBackpackCommand::class,
        CrudControllerBackpackCommand::class,
        ChartControllerBackpackCommand::class,
        CrudOperationBackpackCommand::class,
        CrudRequestBackpackCommand::class,
        CrudBackpackCommand::class,
        ChartBackpackCommand::class,
        ModelBackpackCommand::class,
        PageBackpackCommand::class,
        PageControllerBackpackCommand::class,
        RequestBackpackCommand::class,
        ViewBackpackCommand::class,
    ];

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->commands($this->commands);
    }
}
