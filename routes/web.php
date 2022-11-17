<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddBlog;
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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/admin/admin_master',function(){
    return view('admin.index');
});

Route::get('/admin/add_blog',function(){
    return view('admin.add_blog');
});
Route::view('/admin/manage_blog','admin.manage_blog');

Route::get('/',[AddBlog::class,'show']);
Route::post('add-blog',[AddBlog::class,'save']);
Route::get('blog-delete/{id}',[AddBlog::class,'delete']);
Route::get('blog-edit/{id}',[AddBlog::class,'edit']);
Route::post('update-blog',[AddBlog::class,'update']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
   
});
