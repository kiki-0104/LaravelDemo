<?php

use App\Http\Controllers\InspiringController;
use \Illuminate\Http\Request;
use App\Models\Subject;
 
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello-world', function () {

    return 'Hello world!';

}); 

Route::get('/about_us', function () {

    return view('about_us');

}); 
Route::get('/about_us', function () {

    return view('about_us', ['name' => 'Laravel 6.0 範例']);

}); 

Route::get('/inspire', 'App\Http\Controllers\InspiringController@inspire'); 

Route::get('/test', function(){

    return App\Models\Post::all();

}); 
Route::get('/edit', function(){

    $post = App\Models\Post::find(1);

    $post->content = 'Laravel demo';

    $post->save();

    return $post;

}); 
Route::get('/add1', function(){

    $post = new App\Models\Post;
 
     $post->content = 'abcde';
     $post->subject_id = 1;
 
     $post->save();
 
     return $post; 
 
 }); 
 Route::get('/add2', function(){

    $post = new App\Models\Post;
 
     $post->content = 'ABCDE';
     $post->subject_id = 2;
 
     $post->save();
 
     return $post; 
 
 }); 
 Route::get('/sub1', function(){

    $post =new App\Models\Subject;

    $post->name = 'comperter';

    $post->save();

    return $post;

});
Route::get('/sub2', function(){

    $post =new App\Models\Subject;

    $post-> name = 'network';

    $post->save();

    return $post;

});
Route::get('/get1', function(){

    $post = App\Models\Subject::find(1);

    $post = $subject-> posts;

    return $post;

}); 
Route::resource('posts', 'PostController'); 

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
