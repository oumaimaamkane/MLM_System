<?php

namespace Backpack\CRUD\Tests\Unit\Http\Controllers;

use Backpack\CRUD\app\Http\Controllers\CrudController;

class UserCrudController extends CrudController
{
    public function setup()
    {
        $this->crud->setModel(User::class);
        $this->crud->setRoute('users');
    }

    protected function edit($id)
    {
        return response('edit');
    }

    protected function update($id)
    {
        return response('update');
    }

    protected function index()
    {
        return response('index');
    }
}
