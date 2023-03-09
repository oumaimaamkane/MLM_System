<?php

namespace Backpack\CRUD\app\Http\Controllers\Auth;

use Backpack\CRUD\app\Library\Auth\RegistersUsers;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Validator;
use App\Models\User;

class RegisterController extends Controller
{
    protected $data = []; // the information we send to the view

    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */
    use RegistersUsers;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $guard = backpack_guard_name();

        $this->middleware("guest:$guard");

        // Where to redirect users after login / registration.
        $this->redirectTo = property_exists($this, 'redirectTo') ? $this->redirectTo
            : config('backpack.base.route_prefix', 'dashboard');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $user_model_fqn = config('backpack.base.user_model_fqn');
        $user = new $user_model_fqn();
        $users_table = $user->getTable();
        $email_validation = backpack_authentication_column() == 'email' ? 'email|' : '';

        return Validator::make($data, [
            'reference' => '',
            'firstname'                             => 'required|max:255',
            'lastname'                             => 'required|max:255',
            backpack_authentication_column()   => 'required|'.$email_validation.'max:255|unique:'.$users_table,
            'phone'                             => 'required|max:10',
            'password'                         => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $user_model_fqn = config('backpack.base.user_model_fqn');
        $user = new $user_model_fqn();
        $children=User::where('parent_id' , '1')->get();
        if( count($children)<5){
            return $user->create([
                'firstname'                             => $data['firstname'],
                'lastname'                             => $data['lastname'],
                'parent_id'                             => '1',
                'pack_id'                             => $data['pack_id'],
                'reference'                             => $data['firstname']."_".$data['lastname'].random_int(0 , 500),
                backpack_authentication_column()   => $data[backpack_authentication_column()],
                'phone'                             => $data['phone'], 
                'password'                         => bcrypt($data['password']),
            ]);
            
        }else if(count($children)==5){
            foreach($children as $child){
                $grand_child = User::where('parent_id' , $child->id)->get();
                if(count($grand_child)<5){
                    return $user->create([
                        'parent_id' => $child->id,
                        'firstname'                             => $data['firstname'],
                        'lastname'                             => $data['lastname'],
                        'pack_id'                             => $data['pack_id'],
                        'reference'                             => $data['firstname']."_".$data['lastname'].random_int(0 , 500),
                        backpack_authentication_column()   => $data[backpack_authentication_column()],
                        'phone'                             => $data['phone'], 
                        'password'                         => bcrypt($data['password']),
            ]);
                        
                }
            } 
        }

    }

    protected function createWithParent(array $data , $id)
    {
        $user_model_fqn = config('backpack.base.user_model_fqn');
        $user = new $user_model_fqn();
        $children=User::where('parent_id' , $id)->get();
        if( count($children)<5){
            return $user->create([
                'firstname'                             => $data['firstname'],
                'lastname'                             => $data['lastname'],
                'parent_id'                             => '1',
                'pack_id'                             => $data['pack_id'],
                'reference'                             => $data['firstname']."_".$data['lastname'].random_int(0 , 500),
                backpack_authentication_column()   => $data[backpack_authentication_column()],
                'phone'                             => $data['phone'], 
                'password'                         => bcrypt($data['password']),
            ]);
            
        }else if(count($children)==5){
            foreach($children as $child){
                $grand_child = User::where('parent_id' , $child->id)->get();
                if(count($grand_child)<5){
                    return $user->create([
                        'parent_id' => $child->id,
                        'firstname'                             => $data['firstname'],
                        'lastname'                             => $data['lastname'],
                        'pack_id'                             => $data['pack_id'],
                        'reference'                             => $data['firstname']."_".$data['lastname'].random_int(0 , 500),
                        backpack_authentication_column()   => $data[backpack_authentication_column()],
                        'phone'                             => $data['phone'], 
                        'password'                         => bcrypt($data['password']),
            ]);
                        
                }
            } 
        }

    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        // if registration is closed, deny access
        if (! config('backpack.base.registration_open')) {
            abort(403, trans('backpack::base.registration_closed'));
        }

        $this->data['title'] = trans('backpack::base.register'); // set the page title

        return view(backpack_view('auth.register'), $this->data);
    }

    public function showRegistrationFormWithParent($id)
    {
        // if registration is closed, deny access
        if (! config('backpack.base.registration_open')) {
            abort(403, trans('backpack::base.registration_closed'));
        }

        $this->data['title'] = trans('backpack::base.register'); // set the page title
        $parent = $id;

        return view(backpack_view('auth.register-with-parent'), $this->data , compact('id'));
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        // if registration is closed, deny access
        if (! config('backpack.base.registration_open')) {
            abort(403, trans('backpack::base.registration_closed'));
        }

        $this->validator($request->all())->validate();

        $user = $this->create($request->all());

        event(new Registered($user));
        $this->guard()->login($user);

        return redirect($this->redirectPath());
    }

    public function registerWithParent(Request $request , $id)
    {
        // if registration is closed, deny access
        if (! config('backpack.base.registration_open')) {
            abort(403, trans('backpack::base.registration_closed'));
        }

        $this->validator($request->all())->validate();

        $user = $this->createWithParent($request->all() , $id);

        event(new Registered($user));
        $this->guard()->login($user);

        return redirect($this->redirectPath());
    }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return backpack_auth();
    }
}
