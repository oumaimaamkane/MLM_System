<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UserNetworkCrudControllerRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;

/**
 * Class UserNetworkCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class UserNetworkCrudController extends CrudController
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
        CRUD::setModel(\App\Models\User::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/user-network-crud-controller');
        CRUD::setEntityNameStrings('user network crud controller', 'user network crud controllers');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        return $request;

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */
    }

    public function show($id){
        $user = User::where('id' , $id)->first();
        return view('vendor.backpack.base.create-user-network',compact('user'));
    }

    public function store(Request $request , $id)
    {
        $user_model_fqn = config('backpack.base.user_model_fqn');
        $user = new $user_model_fqn();
        $parent = User::where('id' , $id)->first();
        $children=User::where('parent_id' , $id)->get();
        if( count($children)<5){
            $user->create([
                'parent_id' => $id,
                'pack_id' => $parent->pack_id,
                'level_id'  => 1,
                'reference'                             => $request['firstname']."_".$request['lastname'].random_int(0 , 500),
                'cin'                                   => $request['cin'] ,
                'firstname'                             => $request['firstname'],
                'lastname'                             => $request['lastname'],
                backpack_authentication_column()   => $request[backpack_authentication_column()],
                'phone'                             => $request['phone'], 
                'city'                            => $request['city'],
                'address'                        => $request['address'],
                'gender'                        => $request['gender'],
                'bank'                           => $request['bank'],
                'rib'                            => $request['rib'],
                'password'                       => Hash::make($request['pass']),
                'pass' => $request['pass']
            ]);
            
            return redirect()->back();
        }else if(count($children)==5){
            foreach($children as $child){
                $grand_child = User::where('parent_id' , $child->id)->get();
                if(count($grand_child)<5){
                    $user->create([
                        'parent_id' => $child->id,
                        'pack_id' => $parent->pack_id,
                        'level_id'  => 1,
                        'reference'                             => $request['firstname']."_".$request['lastname'].random_int(0 , 500),
                        'cin'                                   => $request['cin'] ,
                        'firstname'                             => $request['firstname'],
                        'lastname'                             => $request['lastname'],
                        backpack_authentication_column()   => $request[backpack_authentication_column()],
                        'phone'                             => $request['phone'], 
                        'city'                            => $request['city'],
                        'address'                        => $request['address'],
                        'gender'                        => $request['gender'],
                        'bank'                           => $request['bank'],
                        'rib'                            => $request['rib'],
                        'password'                       => Hash::make($request['pass']),
                        'pass' => $request['pass']

                    ]);
                    
                    return redirect()->back();
                }
            } 
        }
    }
    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(UserNetworkCrudControllerRequest::class);

        

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
