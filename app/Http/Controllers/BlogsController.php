<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
Use App\Blog;

class BlogsController extends Controller
{
    //
    public function find(Request $request, Response $response) {
        $blog_category_id = $request->input('blog_category_id');
        $page_size = $request->input('page_size', 15);
        $page_num = $request->input('page_num', 0);
        if($blog_category_id) {
            $blogs = Blog::where(
                'blog_category_id', $blog_category_id
            )->skip($page_size * $page_num)->take($page_size)->get();
            $total_blogs = Blog::where(
                'blog_category_id', $blog_category_id
            )->count();
        } else {
            $blogs = Blog::where('id', '>', 0)->skip($page_size * $page_num)->take($page_size)->get();
            $total_blogs = Blog::where('id', '>', 0)->count();
        }
        
        return [
            'items' => $blogs,
            'total_items' => $total_blogs
        ];
    }
}
