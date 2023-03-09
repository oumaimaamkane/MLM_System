<?php

namespace Backpack\CRUD\Tests\Unit\CrudPanel;

use Backpack\CRUD\app\Library\CrudPanel\CrudPanel;
use Illuminate\Foundation\Testing\RefreshDatabase;

abstract class BaseDBCrudPanelTest extends BaseCrudPanelTest
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

        // call migrations specific to our tests
        $this->loadMigrationsFrom([
            '--database' => 'testing',
            '--path' => realpath(__DIR__.'/../../config/database/migrations'),
        ]);

        $this->artisan('db:seed', ['--class' => 'Backpack\CRUD\Tests\Config\Database\Seeds\UsersRolesTableSeeder']);
        $this->artisan('db:seed', ['--class' => 'Backpack\CRUD\Tests\Config\Database\Seeds\UsersTableSeeder']);
        $this->artisan('db:seed', ['--class' => 'Backpack\CRUD\Tests\Config\Database\Seeds\ArticlesTableSeeder']);
        $this->artisan('db:seed', ['--class' => 'Backpack\CRUD\Tests\Config\Database\Seeds\MorphableSeeders']);
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
