<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table ='tblorders';

    public function inventory()
    {
        return $this->hasMany('App\Inventory');
    }
}
