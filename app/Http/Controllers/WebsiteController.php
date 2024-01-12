<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('landing-page.index', [
            'posts' => Post::limit(5)->orderBy('updated_at', 'desc')->get(),
        ]);
    }

    public function post(Post $post) {
        return view('landing-page.post', [
            'post' => $post
        ]);
    }

    public function category(Category $category) {

    }
}
