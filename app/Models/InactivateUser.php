<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class InactivateUser extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'users';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id' , 'is_admin'];
    protected $fillable = [
        'reference',   
        'pack_id',     
        'parent_id',
        'cin',
        'firstname',
        'lastname', 
        'phone', 
        'city', 
        'address', 
        'bank', 
        'rib', 
        'gender', 
        'avatar', 
        'email', 
        'password', 
        'status', 
    ];
    protected $hidden = ['password',
    'remember_token',];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function childrens() {
        return $this->hasMany(User::class, 'parent_id');
    }

    public function parent() {
        return $this->belongsTo(User::class, 'parent_id');
    }

    public function pack()
    {
        return $this->belongsTo(Pack::class , 'pack_id');
    }
    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
