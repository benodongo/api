<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $fillable = ['order_ref', 'recipient_id', 'shipping_method'];
    public function items()
    {
        return $this->hasMany('App\Items');
    }
}
