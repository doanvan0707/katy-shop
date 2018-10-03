<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'date_order', 'total', 'payment', 'note', 'id_customer',
    ];

    public function customer()
    {
    	return $this->belongsTo('App\Customer');
    }

    public function bill_details()
    {
        return $this->hasMany('App\Bill_detail');
    }
}
