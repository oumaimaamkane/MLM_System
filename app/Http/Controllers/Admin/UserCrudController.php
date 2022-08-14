<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UserRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Http\Request;
use App\Models\User;
use Alert;
/**
 * Class UserCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class UserCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    // use \App\Http\Controllers\Admin\Operations\ActivateOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\User::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/user');
        CRUD::setEntityNameStrings('user', 'users');
        CRUD::setTitle('Participants Activées');
        CRUD::setHeading('Participants Activées');
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
        $this->crud->addClause('where' , 'status' , '=', 'Active');
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
    }

    
    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        $users = User::all();
        CRUD::setValidation(UserRequest::class);

        CRUD::addField([
            'label'     => "Parent",
            'type'      => 'select',
            'name'      => 'parent_id', // the db column for the foreign key
         
            // optional
            // 'entity' should point to the method that defines the relationship in your Model
            // defining entity will make Backpack guess 'model' and 'attribute'
            'entity'    => 'parent',
         
            // optional - manually specify the related model and attribute
            'model'     => "App\Models\User", // related model
            'attribute' => 'reference', // foreign key attribute that is shown to user
         
            // optional - force the related options to be a custom query, instead of all();
            'options'   => (function ($query) {
                 return $query->get();
             }), //  you can use this to filter the results show in the select

        ]);
        CRUD::addField(
            [   // select_from_array
                'label'     => "Pack",
                'type'      => 'select',
                'name'      => 'pack_id', // the db column for the foreign key
            
                // optional
                // 'entity' should point to the method that defines the relationship in your Model
                // defining entity will make Backpack guess 'model' and 'attribute'
                'entity'    => 'pack',
            
                // optional - manually specify the related model and attribute
                'model'     => "App\Models\Pack", // related model
                'attribute' => 'pack', // foreign key attribute that is shown to user
            
                // optional - force the related options to be a custom query, instead of all();
                'options'   => (function ($query) {
                    return $query->get();
                }), //  you can use this to filter the results show in the select
            ],
        );
        CRUD::addField([
            'name'=>'cin',
            'label' => 'CIN'
        ]);
        CRUD::addField([
            'name'=>'firstname',
            'label' => 'Prénom'
        ]);
        CRUD::addField([
            'name'=>'lastname',
            'label' => 'Nom'
        ]);
        CRUD::addField([
            'name'=>'phone',
            'label' => 'Numéro de téléphone'
        ]);
        CRUD::addField([
            'name'=>'city',
            'label' => 'Ville'
        ]);
        CRUD::addField([
            'name'=>'address',
            'label' => 'Addresse'
        ]);
        CRUD::addField(
            [   // select_from_array
                'name'        => 'bank',
                'label'       => "Banque",
                'type'        => 'select_from_array',
                'options'     => [
                'CIH BANK' => 'CIH BANK',
                'ATTIJARI WAFA BANK' => 'ATTIJARI WAFA BANK',
                'ABB-Al Barid Bank' => 'ABB-Al Barid Bank',
                'Arab Bank Maroc' => 'Arab Bank Maroc',
                'AWB-Attijariwafa Bank' => 'AWB-Attijariwafa Bank',
                'BAA-Bank Al Amal' => 'BAA-Bank Al Amal',
                'BANK AL TAMWEEL  WA  AL INMA' => 'BANK AL TAMWEEL  WA  AL INMA',
                'BANK AL YOUSR' => 'BANK AL YOUSR',
                'BANK ASSAFA' => 'BANK ASSAFA',
                'BP-Banque populaire' => 'BP-Banque populaire',
                'BMCE Bank of Africa' => 'BMCE Bank of Africa',
                'BMCI Banque' => 'BMCI Banque',
                'CDG Capital' => 'CDG Capital',
                'CFG-CFG Bank' => 'CFG-CFG Bank',
                'CitiBank-Citibank Morocco' => 'CitiBank-Citibank Morocco',
                'CAM-Credit agricole du Maroc' => 'CAM-Credit agricole du Maroc',
                'CDM-Credit du Maroc' => 'CDM-Credit du Maroc',
                'Dar Al Amane' => 'Dar Al Amane',
                'SGMB-Societe generale Maroc' => 'SGMB-Societe generale Maroc',
                'UMNIA BANK'=> 'UMNIA BANK',
                ],
                'allows_null' => false,
                'default'     => 'one',
            ],
        );
        CRUD::addField([
            'name' => 'rib',
            'label' => "RIB",
            'type' => 'number',
        ]);
        CRUD::addField(['name' => 'gender', 
                        'label' => "Genre",
                        'type' => 'radio',
                        'options'     => [
                            'Female' => "Femme",
                            'Male' => "Homme"
                        ],
                    ]);
        CRUD::field('email');

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

    public function store(Request $request)
    {
        $user_model_fqn = config('backpack.base.user_model_fqn');
        $user = new $user_model_fqn();
        $children=User::where('parent_id' , backpack_user()->id)->get();
        if( count($children)<5){
            $user->create([
                'parent_id' => backpack_user()->id,
                'pack_id' => $request['pack_id'],
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
            ]);
            
            return redirect()->back();
        }else if(count($children)==5){
            foreach($children as $child){
                $grand_child = User::where('parent_id' , $child->id)->get();
                if(count($grand_child)<5){
                    $user->create([
                        'parent_id' => $child->id,
                        'pack_id' => $request['pack_id'],
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
                    ]);
                    
                    return redirect()->back();
                }
            } 
        }
        
        // $user->create([
        //     'parent_id' => $request['parent_id'],
        //     'pack_id' => $request['pack_id'],
        //     'reference'                             => $request['firstname']."_".$request['lastname'].random_int(0 , 500),
        //     'cin'                                   => $request['cin'] ,
        //     'firstname'                             => $request['firstname'],
        //     'lastname'                             => $request['lastname'],
        //     backpack_authentication_column()   => $request[backpack_authentication_column()],
        //     'phone'                             => $request['phone'], 
        //     'city'                            => $request['city'],
        //     'address'                        => $request['address'],
        //     'gender'                        => $request['gender'],
        //     'bank'                           => $request['bank'],
        //     'rib'                            => $request['rib'],
        // ]);
        
        // return redirect()->back();
        // // return $request;
    }

    
}
