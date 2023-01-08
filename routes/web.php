<?php
use App\Http\Controllers\PostController;
use App\Http\Controllers\ImagePostController;
use App\Http\Controllers\CkeditorController;
use Illuminate\Support\Facades\Route;

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
    return view('index');
});


Route::get('posts', [PostController::class, "index"]);
Route::get("create", [PostController::class, "create"]);
Route::post('store', [PostController::class, "store"]);




Route::get('ckeditor', 'CkeditorController@index');
Route::post('ckeditor/upload', 'CkeditorController@upload')->name('ckeditor.upload');


Route::get('summernote-image-upload', [ImagePostController::class, 'index']);
Route::post('post-summernote-image-upload', [ImagePostController::class, 'store']);