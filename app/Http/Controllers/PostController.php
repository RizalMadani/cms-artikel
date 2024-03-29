<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::with('user');

        if (auth()->user()->role === 'author') {
            $post = $post->where('user_id', auth()->user()->id);
        }

        return view('dashboard.post.index', [
            'posts' => $post->get(),
        ]);
    }

    public function create()
    {
        return view('dashboard.post.create', [
            'categories' => Category::all(),
        ]);
    }

    public function store(Request $request)
    {
        if($request->file('banner'))
        {
            $banner= $request->file('banner')->store('post-banner');
        }

        Post::create([
            'title' => $request->title,
            'user_id' => auth()->user()->id,
            'category_id' => $request->category_id,
            'body' => $request->body,
            'excerpt' => Str::limit(strip_tags($request->body), 200),
            'banner' => $banner,
        ]);

        $request->file('banner')->store('post-banner');

        Session::flash('alert-class', 'success');
        Session::flash('alert', ['Berhasil', 'menambahkan artikel baru']);

        return redirect()->route('dashboard.post.index');
    }

    public function edit(Post $post)
    {
        return view('dashboard.post.edit', [
            'post' => $post,
            'categories' => Category::all(),
        ]);
    }

    public function update(Request $request, Post $post)
    {
        if($request->file('banner'))
        {
            $banner= $request->file('banner')->store('post-banner');
        }

        $post->slug = null;
        $post->update([
            'title' => $request->title,
            'user_id' => auth()->user()->id,
            'category_id' => $request->category_id,
            'body' => $request->body,
            'excerpt' => Str::limit(strip_tags($request->body), 200),
            'banner' => $banner,
        ]);

        Session::flash('alert-class', 'success');
        Session::flash('alert', ['Berhasil', 'Berhasil mengedit artikel']);

        return redirect()->route('dashboard.post.index');
    }

    public function destroy(Post $post)
    {
        Post::destroy($post->id);

        Session::flash('alert-class', 'success');
        Session::flash('alert', ['Berhasil',  'Berhasil menghapus artikel']);

        return redirect()->route('dashboard.post.index');
    }
}
