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

Route::get('/cart', 'CartController@index');

Route::get('/introduction', 'StaticController@introduction');

Route::get('/news', 'NewsController@index');
Route::get('/news/detail', 'NewsController@detail');

Route::get('/blog', 'BlogController@index');
Route::get('/blog/detail', 'BlogController@detail');

Route::get('/clientarea/info', 'ClientareaController@info');
Route::get('/clientarea/branchmanagement', 'ClientareaController@branchmanagement');
Route::get('/clientarea/branchservice', 'ClientareaController@branchservice');
Route::get('/clientarea/changepassword', 'ClientareaController@changepassword');
Route::get('/clientarea/collection', 'ClientareaController@collection');
Route::get('/clientarea/createservice', 'ClientareaController@createservice');
Route::get('/clientarea/feedback', 'ClientareaController@feedback');
Route::get('/clientarea/privilege', 'ClientareaController@privilege');
Route::get('/clientarea/service', 'ClientareaController@service');

Use App\Blog;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
 
Route::get('blogs', function() {
    // If the Content-Type and Accept headers are set to 'application/json', 
    // this will return a JSON structure. This will be cleaned up later.
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