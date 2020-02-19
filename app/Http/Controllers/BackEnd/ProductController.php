<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ProductAddRequest;
use App\Http\Requests\ProductEditRequest;


class ProductController extends Controller
{
    //Trang product
    function GetProduct() {
        return view('BackEnd.product.listproduct');
    }
    //Trang Add product
    function GetProductAdd() {
        return view('BackEnd.product.addproduct');
    }

    //Trang Add product
    function PostProductAdd(ProductAddRequest $r) {

    }
    //Trang Edit product
    function GetProductEdit() {
        return view('BackEnd.product.editproduct');
    }
    function PostProductEdit(ProductEditRequest $r) {

    }
    // Detail Attr
    function GetProductDetailAttr() {
        return view('BackEnd.product.attr');
    }
    // Edit Attr
    function GetProductEditAttr() {
        return view('BackEnd.product.editattr');
    }
    // Edit value ( sửa giá trị)
    function GetProductEditValue() {
        return view('BackEnd.product.editvalue');
    }
    // Add variant (thêm biến thể)
    function GetProductAddVarian() {
        return view('BackEnd.product.addvariant');
    }
    // edit variant ( Sửa biến thể)
    function GetProductEditVarian() {
        return view('BackEnd.product.editvariant');
    }
}
