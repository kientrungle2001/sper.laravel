<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
Use App\Review;

class ReviewsController extends Controller
{
    //
    public function find(Request $request, Response $response) {
        $review_category_id = $request->input('review_category_id');
        $page_size = $request->input('page_size', 15);
        $page_num = $request->input('page_num', 0);
        if($review_category_id) {
            $reviews = Review::where(
                'review_category_id', $review_category_id
            )->skip($page_size * $page_num)->take($page_size)->get();
            $total_reviews = Review::where(
                'review_category_id', $review_category_id
            )->count();
        } else {
            $reviews = Review::where('id', '>', 0)->skip($page_size * $page_num)->take($page_size)->get();
            $total_reviews = Review::where('id', '>', 0)->count();
        }
        
        return [
            'items' => $reviews,
            'total_items' => $total_reviews
        ];
    }
}
