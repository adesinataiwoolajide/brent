<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $fillable = [
        'username', 'password',
    ];
    protected $table ='administrator';
}
