<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminBlogController extends Controller
{
    function(){
        return view("admin.index",[
            "categories"=>Category::all()
        ]);
    }
}
