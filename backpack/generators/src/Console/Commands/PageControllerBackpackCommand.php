<?php

namespace Backpack\Generators\Console\Commands;

use Illuminate\Console\GeneratorCommand;
use Illuminate\Support\Str;

class PageControllerBackpackCommand extends GeneratorCommand
{
    use \Backpack\CRUD\app\Console\Commands\Traits\PrettyCommandOutput;

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'backpack:page-controller';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'backpack:page-controller {name} {--view-path=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate a Backpack PageController';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Controller';

    /**
     * Execute the console command.
     *
     * @return bool|null
     *
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     */
    public function handle()
    {
        $name = $this->getNameInput();
        $class = $this->qualifyClass($name);
        $fullPath = $this->getPath($class);
        $path = Str::of($fullPath)->after(base_path())->trim('\\/');

        $this->progressBlock("Creating controller <fg=blue>{$path}</>");

        if ($this->isReservedName($name)) {
            $this->errorProgressBlock();
            $this->note("The name '$name' is reserved by PHP.", 'red');

            return false;
        }

        // Next, We will check to see if the class already exists. If it does, we don't want
        // to create the class and overwrite the user's code. So, we will bail out so the
        // code is untouched. Otherwise, we will continue generating this class' files.
        if ((! $this->hasOption('force') ||
            ! $this->option('force')) &&
            $this->alreadyExists($class)) {
            $this->closeProgressBlock('Already existed', 'yellow');

            return false;
        }

        // Next, we will generate the path to the location where this class' file should get
        // written. Then, we will build the class and make the proper replacements on the
        // stub files so that it gets the correctly formatted namespace and class name.
        $this->makeDirectory($fullPath);

        $this->files->put($fullPath, $this->sortImports($this->buildClass($class)));

        $this->closeProgressBlock();
    }

    /**
     * Get the desired class name from the input.
     *
     * @return string
     */
    protected function getNameInput()
    {
        return Str::of($this->argument('name'))->trim()->studly();
    }

    /**
     * Get the destination class path.
     *
     * @param  string  $name
     * @return string
     */
    protected function getPath($name)
    {
        return str_replace('.php', 'Controller.php', parent::getPath($name));
    }

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__.'/../stubs/page-controller.stub';
    }

    /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\Http\Controllers\Admin';
    }

    /**
     * Replace the path name for the given stub.
     *
     * @param  string  $stub
     * @param  string  $name
     * @return string
     */
    protected function replacePathStrings(&$stub)
    {
        $viewName = $this->getNameInput()->snake('_');
        $pathDot = Str::of($this->option('view-path'))
            ->replace('/', '.')
            ->replace('\\', '.')
            ->append('.'.$viewName)
            ->trim('.');
        $pathSlash = $pathDot->replace('.', '/');

        $stub = str_replace('dummy.path', $pathDot, $stub);
        $stub = str_replace('dummy/path', $pathSlash, $stub);

        return $this;
    }

    /**
     * Replace the name for the given stub.
     *
     * @param  string  $stub
     * @param  string  $name
     * @return string
     */
    protected function replaceNameStrings(&$stub)
    {
        $name = $this->getNameInput();

        $stub = str_replace('DummyName', $name, $stub);
        $stub = str_replace('dummyName', $name->lcfirst(), $stub);
        $stub = str_replace('Dummy Name', $name->kebab()->replace('-', ' ')->title(), $stub);

        return $this;
    }

    /**
     * Build the class with the given name.
     *
     * @param  string  $name
     * @return string
     */
    protected function buildClass($name)
    {
        $stub = $this->files->get($this->getStub());

        return $this
            ->replaceNamespace($stub, $name)
            ->replacePathStrings($stub)
            ->replaceNameStrings($stub)
            ->replaceClass($stub, $name);
    }
}
