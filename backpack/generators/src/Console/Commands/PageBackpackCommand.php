<?php

namespace Backpack\Generators\Console\Commands;

use Illuminate\Console\GeneratorCommand;
use Illuminate\Support\Str;

class PageBackpackCommand extends GeneratorCommand
{
    use \Backpack\CRUD\app\Console\Commands\Traits\PrettyCommandOutput;

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'backpack:page';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'backpack:page {name} 
        {--view-path=admin : Path for the view, after resources/views/}
        {--layout= : Base layout for the page}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate a Backpack Page';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Resource';

    /**
     * Execute the console command.
     *
     * @return bool|null
     *
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     */
    public function handle()
    {
        $input = Str::of($this->getNameInput())
            ->replace('\\', '/')
            ->replace('.', '/')
            ->start('/')
            ->prepend($this->option('view-path'))
            ->replace('//', '/')
            ->trim('/');

        $name = $input->afterLast('/')->replace('-', '_')->snake();
        $path = $input->beforeLast('/');
        $filePath = "$path/$name";
        $fullpath = $this->getPath($filePath);
        $layout = $this->option('layout');

        $this->infoBlock("Creating {$name->replace('_', ' ')->title()} page");

        $this->progressBlock("Creating view <fg=blue>resources/views/${filePath}.blade.php</>");

        // check if the file already exists
        if ((! $this->hasOption('force') || ! $this->option('force')) && $this->alreadyExists($filePath)) {
            $this->closeProgressBlock('Already existed', 'yellow');

            return false;
        }

        $this->makeDirectory($fullpath);

        // create page view
        $stub = $this->buildClass($filePath);
        $stub = str_replace('layout', $layout, $stub);
        $stub = str_replace('Dummy Name', $name->replace('_', ' ')->title(), $stub);
        $this->files->put($fullpath, $stub);

        $this->closeProgressBlock();

        // Clean up name
        $name = $name->replace('_', ' ')->replace('-', ' ')->title();

        // create controller
        $this->call('backpack:page-controller', [
            'name' => $name,
            '--view-path' => $path,
        ]);

        // create route
        $this->call('backpack:add-custom-route', [
            'code' => "Route::get('{$name->kebab()}', '{$name->studly()}Controller@index')->name('page.{$name->kebab()}.index');",
        ]);

        // create the sidebar item
        $this->call('backpack:add-sidebar-content', [
            'code' => "<li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ backpack_url('{$name->kebab()}') }}\"><i class=\"nav-icon la la-question\"></i> {$name}</a></li>",
        ]);

        $url = Str::of(config('app.url'))->finish('/')->append("admin/{$name->kebab()}");

        $this->newLine();
        $this->note("Page {$name} created.");
        $this->note("Go to <fg=blue>$url</> to access your new page.");
        $this->newLine();
    }

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__.'/../stubs/page.stub';
    }

    /**
     * Determine if the class already exists.
     *
     * @param  string  $name
     * @return bool
     */
    protected function alreadyExists($name)
    {
        return $this->files->exists($this->getPath($name));
    }

    /**
     * Get the destination class path.
     *
     * @param  string  $name
     * @return string
     */
    protected function getPath($name)
    {
        return resource_path("views/$name.blade.php");
    }
}
