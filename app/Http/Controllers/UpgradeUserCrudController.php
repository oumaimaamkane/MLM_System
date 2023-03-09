<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UpgradeRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use App\Models\User;
Use App\Models\Pack;
use App\Models\Upgrade;
use DB;
/**
 * Class UpgradeCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class UpgradeUserCrudController extends CrudController
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
        CRUD::setModel(\App\Models\UpgradeUser::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/wallet');
        CRUD::setEntityNameStrings('wallet', 'wallets');
    }

    public function index(){
        $pack=Pack::where('id' , '=' , backpack_user()->pack_id)->first();
        $total = $this->count_children(backpack_user()->id);
        $upgrades = Upgrade::select('amount' , 'members')->where('pack_id' , '=' , backpack_user()->pack_id)->get();
        // return $upgrades;
        $divsion=5;
       foreach($upgrades as $upgrade){
        $small_amount = $upgrade->amount /$divsion;
        $total_q1 = $this->count_children;
        $divsion *=5;

        echo $small_amount . '|';

       }

        // $small_amount = $upgrade->amount /($upgrade->members /5);
        // return $small_amount . '|' . $upgrade;
        // $upgrades = DB::table('upgrades')->select('name' , 'amount' , 'status')
        // ->join('users_upgrade' , 'upgrades.id' , '=' , 'users_upgrade.upgrade_id')
        // ->where('upgrades.pack_id' ,'=' , backpack_user()->pack_id)
        // ->where('users_upgrade.user_id' , '=' , backpack_user()->id)
        // ->get();
        // if($total%5 ==0){
        //     echo ' it can divid by 5';
        // }else {
        //     echo "it cannot devide by 5";
        // }
        // $balance = $total*$upgrade->amount;
        // $balance =DB::table('upgrades')->select('amount')
        // ->join('users_upgrade' , 'upgrades.id' , '=' , 'users_upgrade.upgrade_id')
        // ->where('upgrades.pack_id' ,'=' , backpack_user()->pack_id)
        // ->where('users_upgrade.user_id' , '=' , backpack_user()->id)
        // ->where('users_upgrade.status' , '=' , 'Pas encore traité')
        // ->orderBy('users_upgrade.id' , 'desc')
        // ->first() ;
        // return view('vendor.backpack.base.wallet' , compact('pack' , 'upgrades' , 'balance'));
    }

    public function count_children($id , $day){
        $users = User::select('id')->where('parent_id' , '=' , $id)->where('pack_id' , '=' , backpack_user()->pack_id)->where(DB::raw("DATE_FORMAT(created_at, '%d')") , $day)->get();
        $total_users = $users->count();
        // if($total_users>0){
        //     foreach($users as $user){
        //         // return  1 + $total_users + $this->count_children($user->id);
        //         $total_users += $this->count_children($user->id);
        //     }
        // }
        return $total_users;
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
        return view('vendor.backpack.base.upgrade-participants-list');
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
