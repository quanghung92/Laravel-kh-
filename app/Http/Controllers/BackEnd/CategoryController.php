<?php

namespace App\Http\Controllers\BackEnd;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\CategoryRequestEdit;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\category;

class CategoryController extends Controller
{
    function getCategory(){
        $data['categorys']=category::all();
        return view('BackEnd.category.category',$data);
    }
    function getCategoryEdit(){
        return view('BackEnd.category.editcategory');
    }
    // function post Edit category
    function postCategoryEdit(CategoryRequestEdit $r){

    }
    // function post add category
    function getCategoryAdd(CategoryRequest $r){
        $Addcate= new category;
        $Addcate->name= $r->name;
        $Addcate->parent=$r->parent;
        $Addcate->save();
        return redirect('/admin/category')->with('thongbao','Thêm danh mục thành công');

    }
}
