<?php

namespace Backpack\CRUD\app\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Models\User;
Use App\Models\Level;
Use App\Models\Upgrade;
Use App\Models\UpgradeUser;
Use App\Models\Pack;
use DB;
class AdminController extends Controller
{

    protected $data = []; // the information we send to the view

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware(backpack_middleware());
    }

    /**
     * Show the admin dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        $this->data['title'] = trans('backpack::base.dashboard'); // set the page title
        $this->data['breadcrumbs'] = [
            backpack_user()->firstname . ' '. backpack_user()->lastname     => backpack_url('dashboard'),
            trans('backpack::base.dashboard') => false,
        ];
        $total_users=0;
        $users=DB::table('users')->select('id')->where('pack_id' , '=' , backpack_user()->pack_id)->where('status' , '=' , 'Active')->get();
        
        $users_rate = User::select(DB::raw("COUNT(*) as count"), DB::raw("MONTHNAME(created_at) as month_name"))
        ->where('pack_id' , '=' , backpack_user()->pack_id)
        ->where('status' , '=' , 'Active')
        ->whereYear('created_at', date('Y'))
        ->groupBy(DB::raw("Month(created_at)"))
        ->pluck('count', 'month_name');

        $labels_users_chart = $users_rate->keys();
        $data_users_chart = $users_rate->values();

        if(backpack_user()->is_admin == 1){
            $total_users =$users->count()-1;
        }else {
            $total_users = $this->count_children(backpack_user()->id);
        }
        // $pack = DB::table('packs')->select('pack' , 'amount')->join('users' , 'packs.id' , '=' , 'users.pack_id')->where('users.id' ,'=' , backpack_user()->id)->first();
       
        if($total_users == null || $total_users <= 24){
            $level = Level::where('members' , '<=' , 24)->orderBy('id' , 'desc')->first(); 
            
        }else{
            $level = Level::where('members' , '<=' , $total_users)->orderBy('id' , 'desc')->first();
        }
        $niveau = $level->name;
        
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

        $this->data['labels_users_chart']= $labels_users_chart;
        $this->data['data_users_chart'] = $data_users_chart;
        return view(backpack_view('dashboard'), $this->data , compact('total_users' , 'niveau' , 'balance' ));

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

    public function save_upgrades($users){
        // foreach ($users as $user) {
        //     $total = $this->count_children($user->id);
        //     if($total == 5){
        //         $user_upgrade = Upgrade::select('id')->where('members' , '=' , $total)->where('pack_id' , '=' , backpack_user()->pack_id)->first();
        //         $check_user = UpgradeUser::where('user_id' , '=' , $user->id)->where('upgrade_id' , '=' , $user_upgrade->id)->first();
        //         if(!$check_user){
        //             $upgrade = new UpgradeUser;
        //             $upgrade->create([
        //                 'user_id' => $user->id,
        //                 'upgrade_id' => $user_upgrade->id,
        //             ]);
        //         } 
                
        //     }
             
        //  }
    }

    /**
     * Redirect to the dashboard.
     *
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function redirect()
    {
        // The '/admin' route is not to be used as a page, because it breaks the menu's active state.
        return redirect(backpack_url('dashboard'));
    }
}
