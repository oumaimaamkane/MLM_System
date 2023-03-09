<?php

namespace Backpack\CRUD\Tests\Unit\Http;

use Backpack\CRUD\app\Library\CrudPanel\CrudPanel;
use Backpack\CRUD\Tests\BaseTest;

/**
 * @covers Backpack\CRUD\app\Http\Controllers\CrudController
 */
class CrudControllerTest extends BaseTest
{
    private $crudPanel;

    /**
     * Define environment setup.
     *
     * @param  \Illuminate\Foundation\Application  $app
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
        parent::getEnvironmentSetUp($app);

        $controller = '\Backpack\CRUD\Tests\Unit\Http\Controllers\UserCrudController';

        $app['router']->get('users/{id}/edit', "$controller@edit");
        $app['router']->put('users/{id}', "$controller@update");

        $app['router']->get('admin/users', "$controller@index")->name('admin.users.index');

        $app->singleton('crud', function ($app) {
            return new CrudPanel($app);
        });

        $this->crudPanel = app('crud');
    }

    public function testSetRouteName()
    {
        $this->crudPanel->setRouteName('admin.users');

        $this->assertEquals(url('admin/users'), $this->crudPanel->getRoute());
    }

    public function testCrudRequestUpdatesOnEachRequest()
    {
        $crud = app('crud');

        // create a first request
        $firstRequest = request()->create('/users/1/edit', 'GET');
        app()->handle($firstRequest);
        $firstRequest = app()->request;

        // see if the first global request has been passed to the CRUD object
        $this->assertSame($crud->getRequest(), $firstRequest);

        // create a second request
        $secondRequest = request()->create('/users/1', 'PUT', ['name' => 'foo']);
        app()->handle($secondRequest);
        $secondRequest = app()->request;

        // see if the second global requesst has been passed to the CRUD object
        $this->assertSame($crud->getRequest(), $secondRequest);

        // the CRUD object's request should no longer hold the first request, but the second one
        $this->assertNotSame($crud->getRequest(), $firstRequest);
    }
}
