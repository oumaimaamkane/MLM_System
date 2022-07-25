<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
use App\Models\Tokens;
class User extends Authenticatable
{
    use CrudTrait;
  
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [

        'reference',   
        'pack_id',     
        'parent_id',
        'cin',
        'firstname',
        'lastname', 
        'phone', 
        'city_id', 
        'address', 
        'bank', 
        'rib', 
        'gender', 
        'avatar', 
        'email', 
        'password', 
        'status', 
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
     protected $guarded = ['id','is_admin'];
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }
    public function childrens() {
        return $this->hasMany(User::class, 'parent_id');
    }

    public function parent() {
        return $this->belongsTo(User::class, 'parent_id');
    }

    public function pack()
    {
        return $this->belongsTo(Pack::class , 'pack_id');
    }}
