<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $query = BlogPost::where('published', true)->orderBy('created_at', 'desc');
        
        if ($request->has('category')) {
            $query->where('category', $request->category);
        }
        
        $posts = $query->paginate(9);
        $categories = BlogPost::where('published', true)
            ->distinct()
            ->pluck('category')
            ->filter()
            ->values();
        
        return view('blog.index', compact('posts', 'categories'));
    }

    public function show($slug)
    {
        $post = BlogPost::where('slug', $slug)
            ->where('published', true)
            ->firstOrFail();
        
        $relatedPosts = BlogPost::where('published', true)
            ->where('category', $post->category)
            ->where('id', '!=', $post->id)
            ->limit(3)
            ->get();
        
        return view('blog.show', compact('post', 'relatedPosts'));
    }
}

