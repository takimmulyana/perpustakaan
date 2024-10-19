<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $title = '';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' Kategori ' . $category->name;
        }

        return view('posts', [
            "title" => "Semua Buku $title",
            "posts" => Post::latest()->filter(request(['search', 'category']))->paginate(8)->withQueryString()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Detail Buku",
            "post" => $post
        ]);
    }
}