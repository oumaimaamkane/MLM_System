<?php

namespace Backpack\CRUD\Tests\Unit\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use CrudTrait;

    protected $table = 'users';
    protected $fillable = ['name', 'email', 'password', 'extras'];

    /**
     * Get the account details associated with the user.
     */
    public function accountDetails()
    {
        return $this->hasOne('Backpack\CRUD\Tests\Unit\Models\AccountDetails');
    }

    /**
     * Get the articles for this user.
     */
    public function articles()
    {
        return $this->hasMany('Backpack\CRUD\Tests\Unit\Models\Article');
    }

    /**
     * Get the user roles.
     */
    public function roles()
    {
        return $this->belongsToMany('Backpack\CRUD\Tests\Unit\Models\Role', 'user_role');
    }

    public function getNameComposedAttribute()
    {
        return $this->name.'++';
    }

    public function comment()
    {
        return $this->morphOne('Backpack\CRUD\Tests\Unit\Models\Comment', 'commentable');
    }

    public function recommends()
    {
        return $this->morphToMany('Backpack\CRUD\Tests\Unit\Models\Recommend', 'recommendable')->withPivot('text');
    }

    public function bills()
    {
        return $this->morphToMany('Backpack\CRUD\Tests\Unit\Models\Bill', 'billable');
    }

    public function stars()
    {
        return $this->morphMany('Backpack\CRUD\Tests\Unit\Models\Star', 'starable');
    }

    public function superArticles()
    {
        return $this->belongsToMany('Backpack\CRUD\Tests\Unit\Models\Article', 'articles_user')->withPivot(['notes', 'start_date', 'end_date']);
    }

    public function universes()
    {
        return $this->hasMany('Backpack\CRUD\Tests\Unit\Models\Universe');
    }

    public function planets()
    {
        return $this->hasMany('Backpack\CRUD\Tests\Unit\Models\Planet');
    }

    public function planetsNonNullable()
    {
        return $this->hasMany('Backpack\CRUD\Tests\Unit\Models\PlanetNonNullable');
    }

    public function comets()
    {
        return $this->hasMany('Backpack\CRUD\Tests\Unit\Models\Comet');
    }

    public function bang()
    {
        return $this->belongsTo('Backpack\CRUD\Tests\Unit\Models\Bang', 'bang_relation_field');
    }

    public function incomes()
    {
        return $this->hasMany('Backpack\CRUD\Tests\Unit\Models\Transaction')->ofType('income');
    }

    public function expenses()
    {
        return $this->hasMany('Backpack\CRUD\Tests\Unit\Models\Transaction')->ofType('expense');
    }
}
