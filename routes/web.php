<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\Console\Input\Input;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('home', function() {
    return view('home');
});

Route::post('form', function(Request $request){
    var_dump($request->all);
});
Route::post('form', function(Request $request){
    if ($request->hasFile('profile_picture')){
        var_dump($request->file('profile_picture'));
    }
});


Route::get('image-upload', 'ImageUploadController@imageUpaload')->name('image.upload');
Route::post('image-upload', 'ImageUploadController@imageUploadPost')->name('image.upload.post');
