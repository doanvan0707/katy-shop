<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'unit_price', 'promotion_price', 'image', 'unit', 'new', 'id_type',
    ];

    public function type_product()
    {
    	return $this->belongsTo('App\Type_product');
    }

    public function bill_details()
    {
        return $this->hasMany('App\Bill_detail');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
