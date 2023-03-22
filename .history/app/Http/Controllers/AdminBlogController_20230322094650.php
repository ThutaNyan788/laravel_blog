<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminBlogController extends Controller
{
    public function index(){
        return view("admin.index",[
            "categories"=>Category::all()
        ]);
    }


    public function store()
    {
        $requestData = request()->validate([
            'title'=>'required',
            'slug'=>'required',
            'body'=>'required',
            'category_id'=>['required',Rule::exists("categories",'id')],
        ]);

        $requestData['user_id'] = auth()->user()->id;

        Blog::create()
    }
}
