<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function getBlogs()
    {
        // $query = Blog::latest();

        // if ($search = request('search')) {
        //     $query = $query->where("title", "LIKE", "%" . $search . "%")
        //         ->orWhere("body", "LIKE", "%" . $search . "%");
        // }

        // $query->when(request("search"), function ($query,$search) {
        //     $query = $query->where("title", "LIKE", "%" . $search . "%")
        //         ->orWhere("body", "LIKE", "%" . $search . "%");
        // });

        // return $query->get();
    }


    public function index()
    {
        return view('blogs.index', [
            "blogs" => Blog::latest()->filter(request(['search', 'category', 'author']))->paginate(6)->withQueryString()
        ]);
    }


    public function show(Blog $blog)
    {
        return view('blogs.show', [
            'blog' => $blog->load("comments"),
            "randomBlogs" => Blog::inRandomOrder()->take(3)->get()
        ]);
    }
}
