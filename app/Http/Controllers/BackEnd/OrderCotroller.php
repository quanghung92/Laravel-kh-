<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderCotroller extends Controller
{
    //Order
    function getOrder() {
        return view('BackEnd.order.order');
    }
    // Order Process
    function getOrderProcess() {
        return view('BackEnd.order.orderprocessed');
    }

    // Order detail
    function getOrderDetail() {
        return view('BackEnd.order.detailorder');
    }
}
