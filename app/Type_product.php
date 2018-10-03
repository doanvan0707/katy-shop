<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type_product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'image',
    ];

    public function products()
    {
    	return $this->hasMany('App\Product');
    }
}
