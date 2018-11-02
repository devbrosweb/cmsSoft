<?php

namespace App\Http\Controllers\web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;

class PageController extends Controller
{
    public function blog()
    {
        $posts = Post::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(3);
        return view('web.index', compact('posts'));
    }
}
