<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UpgradeRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use App\Models\User;
use DB;
/**
 * Class UpgradeCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class UpgradeCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Upgrade::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/upgrade');
        CRUD::setEntityNameStrings('upgrade', 'upgrades');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::addColumn(['name' => 'name' , 'label' => "Nom"]);
        CRUD::addColumn(['name' => 'members' , 'label' => "Membres"]);
        CRUD::addColumn(['name' => 'amount' , 'label' => "Prix"]);
        CRUD::addColumn(['name' => 'percentage' , 'label' => "Percentage"]);


        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */
    }
    protected function participantsList(){
        return view('vendor.backpack.base.upgrade-participants-list');
    }

    public function paye($id){
        $user = User::where('id' , '=' ,$id)->update(['upgrade_id' => null]);
        return redirect()->back();
    }


    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(UpgradeRequest::class);
        CRUD::addField(['name' => 'name', 'label' => 'Nom' , 'type' => 'text']); 
        CRUD::addField(['name' => 'members', 'label' => 'Members', 'type' => 'number']); 
        CRUD::addField(['name' => 'amount', 'label' => 'Somme', 'type' => 'number']); 
        CRUD::addField(['name' => 'percentage', 'label' => 'Percentage', 'type' => 'number' , 'attributes' => ['step' => '0.1']]); 
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
}
