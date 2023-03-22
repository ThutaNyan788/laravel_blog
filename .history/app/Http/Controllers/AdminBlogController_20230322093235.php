<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminBlogController extends Controller
{
    public function(){
        return view("admin.index",[
            "categories"=>Category::all()
        ]);
    }
}
