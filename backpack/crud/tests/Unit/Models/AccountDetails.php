<?php

namespace Backpack\CRUD\Tests\Unit\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class AccountDetails extends Model
{
    use CrudTrait;

    protected $table = 'account_details';
    protected $fillable = ['user_id', 'nickname', 'profile_picture', 'article_id', 'start_date', 'end_date'];

    /**
     * Get the user for the account details.
     */
    public function user()
    {
        return $this->belongsTo('Backpack\CRUD\Tests\Unit\Models\User');
    }

    public function addresses()
    {
        return $this->hasMany('Backpack\CRUD\Tests\Unit\Models\Address');
    }

    public function getNicknameComposedAttribute()
    {
        return $this->nickname.'++';
    }

    public function article()
    {
        return $this->belongsTo('Backpack\CRUD\Tests\Unit\Models\Article');
    }

    public function bangs()
    {
        return $this->belongsToMany('Backpack\CRUD\Tests\Unit\Models\Bang');
    }

    public function bangsPivot()
    {
        return $this->belongsToMany('Backpack\CRUD\Tests\Unit\Models\Bang', 'account_details_bangs_pivot')->withPivot('pivot_field');
    }
}
