<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class commit_table extends Model
{
    protected $fillable = [
        'user_id',
        'shop_id',
        'review_id',
        'oder_id'
    ];
}
