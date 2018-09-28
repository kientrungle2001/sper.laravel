<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index');

Route::get('/service', 'ServiceController@index');
Route::get('/service/type', 'ServiceController@type');
Route::get('/service/realty', 'ServiceController@realty');
Route::get('/service/detail', 'ServiceController@detail');
Route::get('/service/product', 'ServiceController@product');

Route::get('/cart', 'CartController@index');

Route::get('/introduction', 'StaticController@introduction');

Route::get('/news', 'NewsController@index');
Route::get('/news/detail', 'NewsController@detail');

Route::get('/video', 'VideoController@index');
Route::get('/video/detail', 'VideoController@detail');

Route::get('/blog', 'BlogController@index');
Route::get('/blog/detail', 'BlogController@detail');

Route::get('/clientarea/info', 'ClientareaController@info');
Route::get('/clientarea/branchmanagement', 'ClientareaController@branchmanagement');
Route::get('/clientarea/branchservice', 'ClientareaController@branchservice');
Route::get('/clientarea/changepassword', 'ClientareaController@changepassword');
Route::get('/clientarea/collection', 'ClientareaController@collection');
Route::get('/clientarea/history', 'ClientareaController@history');
Route::get('/clientarea/createservice', 'ClientareaController@createservice');
Route::get('/clientarea/editservice', 'ClientareaController@editservice');
Route::get('/clientarea/createproduct', 'ClientareaController@createproduct');
Route::get('/clientarea/editproduct', 'ClientareaController@editproduct');
Route::get('/clientarea/feedback', 'ClientareaController@feedback');
Route::get('/clientarea/privilege', 'ClientareaController@privilege');
Route::get('/clientarea/service', 'ClientareaController@service');

Use App\Blog;
Use App\Review;
Use App\Article;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
 
Route::get('blogs', function() {
    return Blog::all();
});

Route::get('blogs/find', 'BlogsController@find');
 
Route::get('blogs/{id}', function($id) {
    return Blog::find($id);
});

Route::post('blogs', function(Request $request) {
    return Blog::create($request->all);
});

Route::put('blogs/{id}', function(Request $request, $id) {
    $blog = Blog::findOrFail($id);
    $blog->update($request->all());
    return $blog;
});

Route::delete('blogs/{id}', function($id) {
    Blog::find($id)->delete();
    return 204;
});

Route::get('reviews/find', 'ReviewsController@find');
 
Route::get('reviews/{id}', function($id) {
    return Review::find($id);
});

Route::post('reviews', function(Request $request) {
    return Review::create($request->all);
});

Route::put('reviews/{id}', function(Request $request, $id) {
    $review = Review::findOrFail($id);
    $review->update($request->all());
    return $review;
});

Route::delete('reviews/{id}', function($id) {
    Review::find($id)->delete();
    return 204;
});

Route::get('articles', function() {
    return Article::all();
});

Route::get('articles/find', 'ArticlesController@find');
 
Route::get('articles/{id}', function($id) {
    return Article::find($id);
});

Route::post('articles', function(Request $request) {
    return Article::create($request->all);
});

Route::put('articles/{id}', function(Request $request, $id) {
    $article = Article::findOrFail($id);
    $article->update($request->all());
    return $article;
});

Route::delete('articles/{id}', function($id) {
    Article::find($id)->delete();
    return 204;
});