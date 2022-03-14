<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $fillable = [
        'id',
        'company_name',
        'owner_name', 
        // 'id_number', 
        // 'service_type', 
        // 'date_of_birth', 
        // 'company_location', 
        // 'shop_image', 
        // 'address',
        // 'email_address',
        // 'years_of_experience',
        // 'scope_of_service',
        // 'description',
        // 'details_of_service',
        'price',
        'active',
    ];
}
