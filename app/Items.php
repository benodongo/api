<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Items extends Model
{


    protected $fillable = ['item_ref', 'quantity', 'variant_id'];
    public function order()
    {
        return $this->belongsTo('App\Orders');
    }
    public function variant()
    {
        return $this->belongsTo('App/Variants');
    }
}
