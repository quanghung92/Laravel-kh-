<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    function getcomment() {
        return view('BackEnd.comment.comment');
    }
    //Trang Add product
    function getCommEdit() {
        return view('BackEnd.comment.editcomment    ');
    }
}
