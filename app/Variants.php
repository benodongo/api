<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Variants extends Model
{
    protected $fillable = ['size', 'brand', 'colour', 'type', 'design'];
    public function items()
    {
        return $this->hasMany('App\Items');
    }
}
