<?php

namespace Backpack\CRUD\app\Console\Commands\Addons;

use Illuminate\Console\Command;

class RequirePro extends Command
{
    use \Backpack\CRUD\app\Console\Commands\Traits\PrettyCommandOutput;
    use \Backpack\CRUD\app\Console\Commands\Traits\AddonsHelper;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'backpack:require:pro
                                {--debug} : Show process output or not. Useful for debugging.';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Require Backpack Pro';

    /**
     * Backpack addons install attribute.
     *
     * @var array
     */
    public static $addon = [
        'name' => 'Backpack Pro',
        'description' => [
            'Adds 5 operations, 10 filters, 28 fields, 6 columns, charts',
        ],
        'path' => 'vendor/backpack/pro',
        'command' => 'backpack:require:pro',
    ];

    /**
     * Execute the console command.
     *
     * @return mixed Command-line output
     */
    public function handle()
    {
        // Check if it is installed
        if ($this->isInstalled()) {
            $this->closeProgressBlock();
            $this->line('  It was already installed.', 'fg=gray');
            $this->newLine();

            return;
        }

        $this->newLine();
        $this->infoBlock('Connecting to the Backpack add-on repository');

        // Check if repositories exists
        $this->composerRepositories();

        // Check for authentication
        $this->checkForAuthentication();

        $this->newLine();
        $this->progressBlock($this->description);

        // Require package
        try {
            $this->composerRequire('backpack/pro');
        } catch (\Throwable $e) {
            $this->errorProgressBlock();
            $this->line('  '.$e->getMessage(), 'fg=red');
            $this->newLine();

            return;
        }

        // Display general error in case it failed
        if (! $this->isInstalled()) {
            $this->errorProgressBlock();
            $this->note('For further information please check the log file.');
            $this->note('You can also follow the manual installation process documented in https://backpackforlaravel.com/addons/');
            $this->newLine();

            return;
        }

        // Finish
        $this->closeProgressBlock();
        $this->newLine();
    }

    public function isInstalled()
    {
        return file_exists(self::$addon['path'].'/composer.json');
    }
}
