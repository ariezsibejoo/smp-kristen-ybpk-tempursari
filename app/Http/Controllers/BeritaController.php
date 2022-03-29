<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $title = '';

        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' di ' . $category->name;
        }

        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' dari ' . $author->name;
        }
        return view('posts', [
            'title' => 'Semua Berita' . $title,
            // with untuk eager loading n+1 problem tidak melakukan query berkali2
            // filter dari model post scopeFIlter
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString(),
            'categories' => Category::latest()->get()
            // 'posts' => Post::all()
        ]);
    }



    // menampilkan pos 1 1
    public function show(Post $post)
    {
        return view('post', [
            'title' => 'Berita',
            'post' => $post
        ]);
    }
}
