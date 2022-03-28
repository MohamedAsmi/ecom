<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer_chart extends Model
{
    protected $fillable = [
        'id', 
        'on_date',
        'cherts',
        'rol'
    ];
}
