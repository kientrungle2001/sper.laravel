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
        $orderBy  = $request->input('orderBy', 'newest');
        if($orderBy == 'newest') {
            $order_by = ['field' => 'created_at', 'dir'  => 'desc'];
        } else {
            $order_by = ['field' => 'blog_views', 'dir'  => 'desc'];
        }
        if($blog_category_id) {
            $blogs = Blog::where(
                'blog_category_id', $blog_category_id
            )->orderBy($order_by['field'], $order_by['dir'])->skip($page_size * $page_num)->take($page_size)->get();
            $total_blogs = Blog::where(
                'blog_category_id', $blog_category_id
            )->count();
        } else {
            $blogs = Blog::where('id', '>', 0)
            ->orderBy($order_by['field'], $order_by['dir'])
            ->skip($page_size * $page_num)->take($page_size)->get();
            $total_blogs = Blog::where('id', '>', 0)->count();
        }
        
        return [
            'items' => $blogs,
            'total_items' => $total_blogs
        ];
    }
}
