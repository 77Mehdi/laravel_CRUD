<?php

use App\Http\Controllers\Blog;
use App\Http\Controllers\ControllerBloges;
use App\Http\Controllers\creat_user;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//###########################################################
// Route::resource('user',creat_user::class);
// Route::resource('blogscreat',ControllerBloges::class);

// // Route::get('/blog',[Blog::class,'bloges']);    to make this to routes in one routes 
// // Route::get('/index',[Blog::class,'bloges']);                 we do this 
// // Route::match(['get'], '/{slug}', [Blog::class, 'bloges'])->where('slug', 'index|blog');
// Route::any('/{slug}', [Blog::class, 'bloges'])->where('slug', 'index|blog');
//###########################################################



Route::get('/', function () {
    return view('layout');
});

Route::get('/home',function(){return view('home');})->name('home.home');
Route::get('/about',function(){return view('about');})->name('home.about');
Route::resource('blogs',ControllerBloges::class);

Route::get('/', function () {
    return view('layout');
});