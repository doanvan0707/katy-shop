<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'name', 'gender', 'email', 'address', 'phone_number', 'note',
    ];

    public function bills()
    {
    	return $this->hasMany('App\Bill');
    }
}
