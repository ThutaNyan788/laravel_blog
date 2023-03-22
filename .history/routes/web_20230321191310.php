<?php

use App\Http\Controllers\AuthController;
use App\Models\Blog;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;

Route::get('/', [BlogController::class, "index"]);
Route::get("/blogs/{blog:slug}", [BlogController::class, "show"])->where("blog", "[A-z\d\-]+");
Route::get("/register", [AuthController::class, "create"]);
Route::post("/register", [AuthController::class, "store"]);
Route::post("/logout", [AuthController::class, "logout"]);
Route::get("/login", [AuthController::class, "index"]);
Route::post("/login", [AuthController::class, "login"]);
//comments
Route::post("/blogs/{blog:slug}/comments", [CommentController::class, "store"])->name('blogs.comments.store');
Route::post("/blogs/{{$blog->slug}}/subscription")
