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

        $getData = $this->requestData();
        dd($getData);
        $path = request('photo')->store("my_photo");
        $getData['photo'] =$path;


        Blog::create($getData);


        return redirect("/");
    }


    public function showBlog()
    {
        return view("admin.blogs",[
            "blogs"=>Blog::paginate(10)
        ]);
    }

    public function destroy(Blog $blog)
    {

        $blog->delete();

        return back();
    }

    public function edit(Blog $blog)
    {
        return view("admin.editPage",[
            'blog'=>$blog,
            'categories'=>Category::all()
        ]);
    }

    public function update(Blog $blog)
    {

        $getData = $this->requestData();

       if(request('photo') == null){
            $getData['photo'] = $blog->photo;
       }else{
        $path = request('photo')->store("my_photo");
            $getData['photo']=$path;
       }

       Blog::where("id",$blog->id)->update($getData);
       return redirect("/");
    }


    // private function requestData()
    // {
    //     $requestData = request()->validate([
    //         'title'=>'required',
    //         'slug'=>'required',
    //         'body'=>'required',
    //         'intro'=>'required',
    //         'photo'=>"image",
    //         'category_id'=>['required',Rule::exists("categories",'id')],
    //     ]);
    //     $requestData['user_id'] = auth()->user()->id;

    //     return $requestData;
    // }
}



