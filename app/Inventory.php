<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $table ='tblinventory';
    public $primaryKey ='ProductId';


    public function order()
    {
        return $this->belongsTo('App\Order');
    }
    public function staffbranch()
    {
        return $this->hasOne('App\Branch', 'bcode', 'branch');
    }

    public function branch()
    {
        return $this->hasOne('App\Branch', 'bcode', 'bcode');
    }

    // public function branch()
    // {
    //     return $this->belongsTo('App\Branch', 'bcode', 'bcode');
    // }
}
