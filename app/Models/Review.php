<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'id',
        'description',
        'stars',
        'on_date',
        'photos'
    ];
}
