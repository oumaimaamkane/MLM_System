<?php

namespace App\Http\Controllers\Admin\Operations;

use Illuminate\Support\Facades\Route;

trait ActivateOperation
{
    /**
     * Define which routes are needed for this operation.
     *
     * @param string $segment    Name of the current entity (singular). Used as first URL segment.
     * @param string $routeName  Prefix of the route name.
     * @param string $controller Name of the current CrudController.
     */
    protected function setupActivateRoutes($segment, $routeName, $controller)
    {
        Route::get($segment.'/activate', [
            'as'        => $routeName.'.activate',
            'uses'      => $controller.'@activate',
            'operation' => 'activate',
        ]);
    }

    /**
     * Add the default settings, buttons, etc that this operation needs.
     */
    protected function setupActivateDefaults()
    {
        $this->crud->allowAccess('activate');

        $this->crud->operation('activate', function () {
            $this->crud->loadDefaultOperationSettingsFromConfig();
        });

        $this->crud->operation('list', function () {
            $this->crud->addButtonFromView('line' , 'activate' , 'activate' , 'beginning' );
            // $this->crud->addButton('line', 'activate', 'view', 'crud::buttons.activate');
        });
    }

    /**
     * Show the view for performing the operation.
     *
     * @return Response
     */
    public function activate()
    {
        $this->crud->hasAccessOrFail('activate');
        
        // prepare the fields you need to show
        $this->data['crud'] = $this->crud;
        $this->data['title'] = $this->crud->getTitle() ?? 'activate '.$this->crud->entity_name;
        $this->data['heading'] = $this->crud->getHeading('Users'); // get the Heading for the create action
        $this->data['subheading'] =$this->crud->setSubheading('Activate users');
        
        // load the view
        return view('vendor.backpack.crud.activate', $this->data);
    }
}
