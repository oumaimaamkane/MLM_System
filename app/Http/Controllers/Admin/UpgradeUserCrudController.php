<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UpgradeRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use App\Models\User;
Use App\Models\Pack;
use App\Models\Upgrade;
use App\Models\UpgradeUser;
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
        $this->count_children(backpack_user()->id);
        $upgrades = Upgrade::where('pack_id' , '=' , backpack_user()->pack_id)->get();
        
        $user_upgrades = DB::table('upgrades')->select('name' , 'upgrades.amount' , 'status' , 'users_upgrade.members' , 'users_upgrade.updated_at')
        ->join('users_upgrade' , 'upgrades.id' , '=' , 'users_upgrade.upgrade_id')
        ->where('upgrades.pack_id' ,'=' , backpack_user()->pack_id)
        ->where('users_upgrade.user_id' , '=' , backpack_user()->id)
        ->get();

        $balance=0;
        foreach($user_upgrades as $user_upgrade){
            if($user_upgrade->status == 'Pas encore traité'){
                $balance += $user_upgrade->amount;
            }
        }
        
        return view('vendor.backpack.base.wallet' , compact('pack' , 'user_upgrades' , 'upgrades' , 'balance'));
    }

    public function count_children($id){
        $users = User::select('id')->where('parent_id' , '=' , $id)->where('pack_id' , '=' , backpack_user()->pack_id)->get();
        $total_users = $users->count();
        if($total_users>4){
            $this->direct($id);
        }
        if($total_users>0){
            foreach($users as $user){
                // return  1 + $total_users + $this->count_children($user->id);
                $total_users += $this->count_children($user->id);

            }
        }
        if($total_users>24){
            $this->upgrade1($id , $total_users);
            // echo $total_users . '|';
        }
        if($total_users>3124){
            $this->upgrade2($id , $total_users);
            // echo $total_users . '|';
        }
        if($total_users>390624){
            $this->upgrade3($id , $total_users);
        }

        return $total_users;
    }

    private function direct($id){
        $user_upgrade = Upgrade::where('members' , '=' , 5)->where('pack_id' , '=' , backpack_user()->pack_id)->first();
        $check_user = UpgradeUser::where('user_id' , '=' , $id)->where('upgrade_id' , '=' , $user_upgrade->id)->where('members' , '=' , 5)->first();
        if(!$check_user){
            $upgrade = new UpgradeUser;
            $upgrade->create([
                'user_id' => $id,
                'upgrade_id' => $user_upgrade->id,
                'members' => 5
            ]);
        }     
    }

    private function upgrade1($id , $total_users){
        $user_upgrade = Upgrade::where('members' , '=' , 0)->where('pack_id' , '=' , backpack_user()->pack_id)->first();
        for ($i=30; $i<126 ; $i+=5) { 
            if ($total_users == $i  || $total_users > $i) {
                // echo $id.'-'. $i . '|';
                $check_user = UpgradeUser::where('user_id' , '=' , $id)->where('upgrade_id' , '=' , $user_upgrade->id)->where('members' , '=' , $i)->first();
                if(!$check_user){
                    $upgrade = new UpgradeUser;
                    $upgrade->create([
                        'user_id' => $id,
                        'upgrade_id' => $user_upgrade->id,
                        'members' => $i
                    ]);
                } 
            }
        }
    }

    private function upgrade2($id , $total_users){
        $user_upgrade = Upgrade::where('members' , '=' , 1)->where('pack_id' , '=' , backpack_user()->pack_id)->first();
        for ($i=3130; $i<15626 ; $i+=5) { 
            if ($total_users == $i  || $total_users > $i) {
                // echo $id.'-'. $i . '|';
                $check_user = UpgradeUser::where('user_id' , '=' , $id)->where('upgrade_id' , '=' , $user_upgrade->id)->where('members' , '=' , $i)->first();
                if(!$check_user){
                    $upgrade = new UpgradeUser;
                    $upgrade->create([
                        'user_id' => $id,
                        'upgrade_id' => $user_upgrade->id,
                        'members' => $i
                    ]);
                } 
            }
        }
    }

    private function upgrade3($id , $total_users){
        $user_upgrade = Upgrade::where('members' , '=' , 2)->where('pack_id' , '=' , backpack_user()->pack_id)->first();
        for ($i=390630; $i<1953130 ; $i+=5) { 
            if ($total_users == $i  || $total_users > $i) {
                $check_user = UpgradeUser::where('user_id' , '=' , $id)->where('upgrade_id' , '=' , $user_upgrade->id)->where('members' , '=' , $i)->first();
                if(!$check_user){
                    $upgrade = new UpgradeUser;
                    $upgrade->create([
                        'user_id' => $id,
                        'upgrade_id' => $user_upgrade->id,
                        'members' => $i
                    ]);
                } 
            }
        }
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
