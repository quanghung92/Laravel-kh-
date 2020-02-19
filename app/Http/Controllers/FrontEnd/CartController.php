<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    function getCart(){
        return view('frontend.cart.cart');
    }
    function getCheckout(){
        return view('frontend.cart.checkout');
    }
    function getComplete(){
        return view('frontend.cart.complete');
    }
}
