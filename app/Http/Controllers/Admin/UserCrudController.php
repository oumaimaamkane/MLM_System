<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UserRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Alert;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Collection;

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
    private $collection;

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
    
    public function count_children($id){
        $users = User::select('id')->where('parent_id' , '=' , $id)->where('pack_id' , '=' , backpack_user()->pack_id)->get();
        $total_users = $users->count();
        if($total_users>0){
            foreach($users as $user){
                // return  1 + $total_users + $this->count_children($user->id);
                $total_users += $this->count_children($user->id);
            }
        }
        return $total_users;
    }

    // protected $children_array = array();
    
    public function display_children($id){
        $users = User::where('parent_id' , '=' , $id)->where('pack_id' , '=' , backpack_user()->pack_id)
        ->where('status' , '=' , 'Active')->paginate(10);
        
        foreach($users as $user){
            // return  1 + $total_users + $this->count_children($user->id);
            $users =$users->merge($this->display_children($user->id));
        }
        // $users=$users->merge(backpack_user()->reference);
        return $users;
    }
   
    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        // if(backpack_user()->is_admin == 0){
            // $this->List();
            // $users = $this->display_children(backpack_user()->id);
            // return view('vendor.backpack.base.users-list' , compact('users'));
            //  $this->crud->addClause('where', 'parent_id', function($query) {
            //     $this->display_children(backpack_user()->id);
            //     // $query->activePosts();
            // });
            
            // $this->crud->addClause('where' , 'parent_id' , '=', backpack_user()->id);
            // $this->crud->addClause('where' , 'status' , '=', 'Active');
            // // foreach ($users as $user) {
            //     CRUD::column('reference');
            //     CRUD::addColumn(['name'=>'firstname',
            //             'label' => 'Prénom']);
            //     CRUD::addColumn(['name'=>'lastname',
            //                 'label' => 'Nom']);
            //     CRUD::addColumn(['name'=>'pass',
            //                 'label' => 'Password']);
            //     CRUD::addColumn(['name'=>'pack_id',
            //             'label' => 'Pack']);
            //     $this->crud->removeButtons(['delete' , 'update' ], 'line');
            // }
            
            
        // }else{
            $this->crud->addClause('where' , 'status' , '=', 'Active');
            $this->crud->addClause('where' , 'pack_id' , '=', backpack_user()->pack_id);
            CRUD::column('reference');
            CRUD::addColumn(['name'=>'firstname',
                    'label' => 'Prénom']);
            CRUD::addColumn(['name'=>'lastname',
                        'label' => 'Nom']);
            CRUD::addColumn(['name'=>'pass',
                        'label' => 'Password']);
            CRUD::addColumn(['name'=>'pack_id',
                        'label' => 'Pack']);
            $this->crud->addButtonFromView('top' , 'export' , 'export' , 'end' );
        // }
        
    }

    protected function List(){
        // if(backpack_user()->is_admin == '1'){
        //     $this->setupListOperation();
        // }else{
            $users= $this->display_children(backpack_user()->id);
            CRUD::addColumn(['name'=>'firstname',
                        'label' => 'Prénom']);
            // $this->crud->removeButtons(['delete' , 'update' ], 'line');
            return view('vendor.backpack.base.users-list' , compact('users'));
        // }
        
    }

    public function index2(){
        if(backpack_user()->is_admin == 0){
            $users= $this->display_children(backpack_user()->id);
            return view('vendor.backpack.base.users-list' , compact('users'));
        }
        
    }

    protected function setupShowOperation(){
        if(backpack_user()->is_admin == 0){
            CRUD::addColumn(['name'=>'firstname',
            'label' => 'Prénom']);
            CRUD::addColumn(['name'=>'lastname',
                            'label' => 'Nom']);
            CRUD::addColumn(['name'=>'email',
            'label' => 'Email']);
            CRUD::addColumn(['name'=>'phone',
                            'label' => 'Numéro de téléphone']);  
            CRUD::addColumn(['name'=>'pack_id',
                            'label' => 'Pack']);             
                
            $this->crud->removeButtons(['delete' , 'update' ], 'line');
        }else{
            CRUD::addColumn(['name'=>'firstname',
                    'label' => 'Prénom']);
            CRUD::addColumn(['name'=>'lastname',
                            'label' => 'Nom']);
            CRUD::addColumn(['name'=>'email',
            'label' => 'Email']);
            CRUD::addColumn(['name'=>'phone',
                            'label' => 'Numéro de téléphone']);  
            CRUD::addColumn(['name'=>'pack_id',
                            'label' => 'Pack']);  
            CRUD::addColumn(['name'=>'cin',
            'label' => 'CIN']);  
            CRUD::addColumn(['name'=>'city',
                            'label' => 'Ville']);
            CRUD::addColumn(['name'=>'address',
            '               label' => 'Address']);
            CRUD::addColumn(['name'=>'bank',
                            'label' => 'Banque']); 
            CRUD::addColumn(['name'=>'rib',
            'label' => 'RIB']);      

                        
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
         
        // $users = User::all();
        // CRUD::setValidation(UserRequest::class);
        if (backpack_user()->is_admin == 1) {
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
        } else {
            CRUD::addField([
                'label'     => "Parent",
                'type'      => 'select_from_array',
                'name'      => 'parent_id', // the db column for the foreign key
                'options' => $this->display_children(backpack_user()->id),
                // // optional
                // // 'entity' should point to the method that defines the relationship in your Model
                // // defining entity will make Backpack guess 'model' and 'attribute'
                // 'entity'    => 'parent',
             
                // // optional - manually specify the related model and attribute
                // 'model'     => "App\Models\User", // related model
                // 'attribute' => 'reference', // foreign key attribute that is shown to user
             
                // // optional - force the related options to be a custom query, instead of all();
                // 'options'   => (function ($query) {
                //      $this->display_children(backpack_user()->id);
                //     //  return $query->where('id' , backpack_user()->id)->orWhere('parent_id' , backpack_user()->id)->get();
                //  }), //  you can use this to filter the results show in the select
    
            ]);
        }
        
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
                'BARID CASH' => 'BARID CASH',
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
        CRUD::addField([
            'name' => 'pass',
            'label' => "Password",
            'type' => 'text',
        ]);

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number'])); 
         */
    }

    protected function create(){
       $users= $this->display_children(backpack_user()->id);
        
        return view('vendor.backpack.base.create-user' , compact('users'));
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
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
                'BARID CASH' => 'BARID CASH',
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
        CRUD::addField('pass');
    }

    public function store(Request $request)
    {
        // return $request;
        $user_model_fqn = config('backpack.base.user_model_fqn');
        $user = new $user_model_fqn();
        
        $children=User::where('parent_id' , $request['parent_id'])->get();
        
        if( count($children)<5){
            $user->create([
                'parent_id' => $request['parent_id'],
                'pack_id' => backpack_user()->pack_id,
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
        }else if(count($children) == 5){
            foreach($children as $child){
                $grand_child = User::where('parent_id' , $child->id)->get();
                if(count($grand_child)<5){
                    $user->create([
                        'parent_id' => $child->id,
                        'pack_id' => backpack_user()->pack_id,
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
                        'password'                        => Hash::make($request['pass']),
                        'pass' => $request['pass']

                    ]);
                    
                    return redirect()->back();
                }
            } 
        }
        
    }

    public function update(Request $request){
        $user = User::where('id' , '=' , $request->id)->first();
        // return $request;
        
        $user->update([
            'parent_id' => $request['parent_id'],
                'pack_id' => backpack_user()->pack_id,
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
                'pass'                          => $request['pass'],                       
        ]);
        return redirect()->back();
    }
    
    public function export() 
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
    
}
