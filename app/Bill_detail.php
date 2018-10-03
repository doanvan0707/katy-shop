<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill_detail extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'qtt', 'unit_price', 'id_bill', 'id_product',
    ];

    public function bill()
    {
    	return $this->belongsTo('App\Bill');
    }

    public function product()
    {
    	return $this->belongsTo('App\Product');
    }
}
