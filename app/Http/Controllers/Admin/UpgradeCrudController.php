<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UpgradeRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use App\Models\User;
use App\Models\Pack;
use App\Models\UpgradeUser;
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
        CRUD::addColumn(['name' => 'pack_id' , 'label' => "Pack"]);
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
        $direct_users = DB::table('upgrades')->select('users.id','firstName' , 'lastName' , 'users_upgrade.upgrade_id', 'upgrades.amount')
        ->join('users_upgrade' , 'upgrades.id' , '=' , 'users_upgrade.upgrade_id')
        ->join('users' , 'users.id' , '=' , 'users_upgrade.user_id')
        ->where('upgrades.pack_id' ,'=' , backpack_user()->pack_id)
        ->where('upgrades.name' , '=' , 'Direct')
        ->where('users_upgrade.status' , '=' , 'Pas encore traité')
        ->get() ;
        
        $up1_users = DB::table('upgrades')->select('users.id','firstName' , 'lastName' , 'users_upgrade.upgrade_id' , 'users_upgrade.members' , 'upgrades.amount')
        ->join('users_upgrade' , 'upgrades.id' , '=' , 'users_upgrade.upgrade_id')
        ->join('users' , 'users.id' , '=' , 'users_upgrade.user_id')
        ->where('upgrades.pack_id' ,'=' , backpack_user()->pack_id)
        ->where('upgrades.name' , '=' , 'Upgrade1-mini')
        ->where('users_upgrade.status' , '=' , 'Pas encore traité')
        ->get() ;
        $up2_users = DB::table('upgrades')->select('users.id','firstName' , 'lastName' , 'users_upgrade.upgrade_id' , 'users_upgrade.members')
        ->join('users_upgrade' , 'upgrades.id' , '=' , 'users_upgrade.upgrade_id')
        ->join('users' , 'users.id' , '=' , 'users_upgrade.user_id')
        ->where('upgrades.pack_id' ,'=' , backpack_user()->pack_id)
        ->where('upgrades.name' , '=' , 'Upgrade2-mini')
        ->where('users_upgrade.status' , '=' , 'Pas encore traité')
        ->get() ;;
        $up3_users= DB::table('upgrades')->select('users.id','firstName' , 'lastName' , 'users_upgrade.upgrade_id' , 'users_upgrade.members')
        ->join('users_upgrade' , 'upgrades.id' , '=' , 'users_upgrade.upgrade_id')
        ->join('users' , 'users.id' , '=' , 'users_upgrade.user_id')
        ->where('upgrades.pack_id' ,'=' , backpack_user()->pack_id)
        ->where('upgrades.name' , '=' , 'Upgrade3-mini')
        ->where('users_upgrade.status' , '=' , 'Pas encore traité')
        ->get() ;
        $pack=Pack::where('id' , backpack_user()->pack_id)->first();


        return view('vendor.backpack.base.upgrade-participants-list' , compact('direct_users' , 'up1_users' , 'up2_users' , 'up3_users' , 'pack'));
    }

    public function paye($upgrade_id , $id){
        $user = UpgradeUser::where('user_id' , '=' ,$id)->where('upgrade_id' , '=' , $upgrade_id)->update(['status' => 'Traité']);
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
        CRUD::addField(['name' => 'pack_id', 'label' => 'Pack' ]);
        CRUD::addField(['name' => 'name', 'label' => 'Nom' , 'type' => 'text']); 
        CRUD::addField(['name' => 'members', 'label' => 'Members', 'type' => 'number']); 
        CRUD::addField(['name' => 'amount', 'label' => 'Somme', 'type' => 'number']); 
        CRUD::addField(['name' => 'percentage', 'label' => 'Percentage', 'type' => 'number' , 'attributes' => ['step' => '0.25']]); 
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
