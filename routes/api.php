<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

use \App\Blog;

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