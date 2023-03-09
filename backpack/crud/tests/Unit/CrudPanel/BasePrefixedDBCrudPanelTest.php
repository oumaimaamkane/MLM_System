<?php

namespace Backpack\CRUD\Tests\Unit\CrudPanel;

use Backpack\CRUD\app\Library\CrudPanel\CrudPanel;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;

abstract class BasePrefixedDBCrudPanelTest extends BaseCrudPanelTest
{
    use RefreshDatabase;

    /**
     * @var CrudPanel
     */
    protected $crudPanel;

    protected $model;

    /**
     * Setup the test environment.
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();

        DB::connection('testing')->getSchemaGrammar()->setTablePrefix('test_');
        // call migrations specific to our tests
        $this->loadMigrationsFrom([
            '--database' => 'testing',
            '--path' => realpath(__DIR__.'/../../config/database/migrations'),
        ]);

        $this->artisan('db:seed', ['--class' => 'Backpack\CRUD\Tests\Config\Database\Seeds\UsersRolesTableSeeder']);
        $this->artisan('db:seed', ['--class' => 'Backpack\CRUD\Tests\Config\Database\Seeds\UsersTableSeeder']);
        $this->artisan('db:seed', ['--class' => 'Backpack\CRUD\Tests\Config\Database\Seeds\ArticlesTableSeeder']);
    }

    /**
     * Define environment setup.
     *
     * @param  \Illuminate\Foundation\Application  $app
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('database.default', 'testing');
        DB::connection('testing')->setTablePrefix('test_');
    }

    protected function defineDatabaseMigrations()
    {
        DB::connection('testing')->getSchemaGrammar()->setTablePrefix('test_');
        $this->artisan('migrate', ['--database' => 'testing']);
    }

    /**
     * Assert that the attributes of a model entry are equal to the expected array of attributes.
     *
     * @param  array  $expected  attributes
     * @param  \Illuminate\Database\Eloquent\Model  $actual  model
     */
    protected function assertEntryEquals($expected, $actual)
    {
        foreach ($expected as $key => $value) {
            if (is_array($value)) {
                $this->assertEquals(count($value), $actual->{$key}->count());
            } else {
                $this->assertEquals($value, $actual->{$key});
            }
        }

        $this->assertNotNull($actual->created_at);
        $this->assertNotNull($actual->updated_at);
    }
}
