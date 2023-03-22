<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function toggleSubscript(Blog $blog)
    {
        if(auth()->user()->isSubscribed($blog))
        {
            dd("unsubscribe");
        }else{
            dd("subscribe");

        }
    }
}
