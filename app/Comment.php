<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'title', 'content', 'product_id', 'customer_id',
    ];

    public function customer()
    {
    	return $this->belongsTo('App\Customer');
    }

        public function product()
    {
    	return $this->belongsTo('App\Product');
    }
}
