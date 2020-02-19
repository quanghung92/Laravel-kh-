<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopControoler extends Controller
{
    function getshop(){
        return view('frontend.shop.shop');
    }
    function getDetail(){
        return view('frontend.shop.detail');
    }
}
