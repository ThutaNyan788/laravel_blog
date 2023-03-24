<?php

namespace App\Http\Controllers;

use App\Models\Blog;
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
            'photo'=>"image",
            'category_id'=>['required',Rule::exists("categories",'id')],
        ]);
        $path = request('photo')->store("my_photo");
        $requestData['user_id'] = auth()->user()->id;
        $requestData['photo'] =$path;


        Blog::create($requestData);


        return redirect("/");
    }


    public function showBlog()
    {
        return view("admin.blogs",);
    }
}
