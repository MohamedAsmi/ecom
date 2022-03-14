<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\shop;

class shopcontroller extends Controller
{
    public function num_shops(){
        $shops=shop::getAllProduct();
        // return $products;
        return $shops;
    }
}
