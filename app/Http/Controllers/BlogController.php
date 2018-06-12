<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Blog;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request) {

        $bloglist = DB::table('blog')->join('categories','blog.blog_category', '=', 'categories.id')->select('blog.*', 'categories.name as category_name', 'categories.image as category_image')->orderBy('created_at', 'desc')->paginate(5);        

        return view('blog', ['bloglist' =>$bloglist]);
    }

    public function show($id) {
        $blogpost = DB::table('blog')->join('categories','blog.blog_category', '=', 'categories.id')->select('blog.*', 'categories.name as category_name')->where('blog.id', '=', $id)->get();

        return view('blogview', ['blogpost' => $blogpost]);
    }
}
