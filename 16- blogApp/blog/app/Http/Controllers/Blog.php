<?php

namespace App\Http\Controllers;

use App\Models\Gategory;
use App\Models\Post;
use Illuminate\Http\Request;

class Blog extends Controller
{
    public function getBlogWebsite(Request $request) {
        $gategories = Gategory::all();
        $posts = Post::Where('isPosted',1)->get();
        $sortedPosts = collect($posts)->sortByDesc('created_at')->values()->all();
        return view('blogWebsite.index',compact('sortedPosts',"gategories"));
    }
    public function showPosts(Request $request) {

    }
}
