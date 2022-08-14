<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\InactivateUserRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use App\Models\User;
use Alert;
/**
 * Class InactivateUserCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class InactivateUserCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\InactivateUser::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/inactivate-user');
        CRUD::setEntityNameStrings('inactivate user', 'inactivate users');
        CRUD::setTitle('Participants Désactivées');
        CRUD::setHeading('Participants Désactivées');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        $this->crud->addClause('where' , 'parent_id' , '=', backpack_user()->id);
        $this->crud->addClause('where' , 'status' , '=', 'Desactive');
        CRUD::column('reference');
        CRUD::column('cin');
        CRUD::addColumn(['name'=>'firstname',
                'label' => 'Prénom']);
        CRUD::addColumn(['name'=>'lastname',
                    'label' => 'Nom']);
        CRUD::addColumn(['name'=>'phone',
                    'label' => 'Numéro de télephone']);
        CRUD::addColumn(['name'=>'pack_id',
        'label' => 'Pack']);
        CRUD::column('status');
        $this->crud->removeButtons(['delete', 'show' , 'update'], 'line');
        $this->crud->removeButtonFromStack('create', 'top');
        $this->crud->addButtonFromView('line' , 'activate' , 'activate' , 'beginning' );

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(InactivateUserRequest::class);

        

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number'])); 
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
    
    public function activate($id){
        $user = User::where('id' , '=' ,$id)->update(['status' => 'Active']);
        if($user){
         Alert::success(trans('backpack::base.account_activated'))->flash();
        }else {            
        Alert::error(trans('backpack::base.error_saving'))->flash();
        }
        return redirect()->back();
    }
}
