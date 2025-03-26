<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::where('category_id', request('category_id'))
            ->orderBy('id','desc')->get();

        $categories = Category::all();

        return view(  'home', compact('categories', 'posts') );
    }
}
