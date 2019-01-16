<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $table ='tblbranch';
    //protected $primaryKey ='bcode';

    public function inventory()
    {
        return $this->belongsToMany('App\Inventory', 'bcode', 'ProductId');
    }

    public function inventories()
    {
        return $this->hasMany('App\Inventory', 'bcode', 'bcode');
    }


    public function user()
    {
        return $this->belongsTo('App\User', 'bcode', 'branch');
    }

    public function manager()
    {
        return $this->hasOne('App\User', 'bcode', 'branch');
    }

    
}
