<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\NetworkRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Http\Request;
use App\Models\User;
/**
 * Class NetworkCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class NetworkCrudController extends CrudController
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
    public function index()
    {
        $parent = User::where('id' , backpack_user()->id)->first();
        $children = User::where('parent_id' , backpack_user()->id)->where('pack_id' , backpack_user()->pack_id)->get();
        if(count($children)>0){
            foreach($children as $kid){
                $grand_children = User::where('parent_id' , $kid->id)->get();
                return view('vendor.backpack.base.network',compact('parent' , 'children' ,'grand_children'));
            }
        }else{
            $children = null;
            $grand_children = null;
            return view('vendor.backpack.base.network',compact('parent' , 'children' ,'grand_children'));
        }
        
        // return $grand_children ;
        
        // return view('vendor.backpack.base.network',compact('parent' , 'children' ,'grand_children'));
    }
    public function show($id){
        $parent = User::where('id' , $id)->first();
        $children = User::where('parent_id' , $id)->where('pack_id' , backpack_user()->pack_id)->get();
        if(count($children)>0){
            foreach($children as $kid){
                $grand_children = User::where('parent_id' , $kid->id)->where('pack_id' , backpack_user()->pack_id)->get();
                return view('vendor.backpack.base.network',compact('parent' , 'children' ,'grand_children'));

            }
        }else{
            return view('vendor.backpack.base.network',compact('parent' , 'children' ));
        }
        
    }

    public function setup()
    {
        CRUD::setModel(\App\Models\Network::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/network');
        CRUD::setEntityNameStrings('network', 'networks');
    }

    public function pack($nr){
        $parent = User::where('id' , backpack_user()->id)->first();
        $children = User::where('parent_id' , backpack_user()->id)->where('pack_id' , $nr)->get();
        if(count($children)>0){
            foreach($children as $kid){
                $grand_children = User::where('parent_id' , $kid->id)->where('pack_id' , $nr)->get();
                return view('vendor.backpack.base.network',compact('parent' , 'children' ,'grand_children'));
            }
        }else{
            $children = null;
            $grand_children = null;
            return view('vendor.backpack.base.network',compact('parent' , 'children' ,'grand_children'));
        }
    }
    public function packTreeShow($nr , $id){
        $parent = User::where('id' , $id)->first();
        $children = User::where('parent_id' , $id)->where('pack_id' , $nr)->get();
        if(count($children)>0){
            foreach($children as $kid){
                $grand_children = User::where('parent_id' , $kid->id)->where('pack_id' , $nr)->get();
                return view('vendor.backpack.base.network',compact('parent' , 'children' ,'grand_children'));

            }
        }else{
            return view('vendor.backpack.base.network',compact('parent' , 'children' ));
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
        CRUD::setValidation(NetworkRequest::class);
        
        

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
