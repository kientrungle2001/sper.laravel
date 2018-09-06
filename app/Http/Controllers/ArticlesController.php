<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
Use App\Article;

class ArticlesController extends Controller
{
    //
    public function find(Request $request, Response $response) {
        $article_category_id = $request->input('article_category_id');
        $page_size = $request->input('page_size', 15);
        $page_num = $request->input('page_num', 0);
        $orderBy  = $request->input('orderBy', 'newest');
        if($orderBy == 'newest') {
            $order_by = ['field' => 'created_at', 'dir'  => 'desc'];
        } else {
            $order_by = ['field' => 'article_views', 'dir'  => 'desc'];
        }
        if($article_category_id) {
            $articles = Article::where(
                'article_category_id', $article_category_id
            )->orderBy($order_by['field'], $order_by['dir'])->skip($page_size * $page_num)->take($page_size)->get();
            $total_articles = Article::where(
                'article_category_id', $article_category_id
            )->count();
        } else {
            $articles = Article::where('id', '>', 0)
            ->orderBy($order_by['field'], $order_by['dir'])
            ->skip($page_size * $page_num)->take($page_size)->get();
            $total_articles = Article::where('id', '>', 0)->count();
        }
        
        return [
            'items' => $articles,
            'total_items' => $total_articles
        ];
    }
}
