<?php

use App\Http\Controllers\CategoryPostController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Models\CategoryPost;
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

Route::get('/', function () {
    return view('auth.login',['type_menu' => '']);
});

Route::middleware(['auth','verified'])->group(function () {
    Route::get('home',function () {
        return view("pages.dashboard",['type_menu' => '']);
    })->name('home')->middleware('can:dashboard');
    Route::get('profile-edit',function () {
        return view("pages.profile",['type_menu' => '']);
    })->name('profile.edit')->middleware('can:dashboard');

    Route::resource('user',UserController::class);
    Route::resource('article',PostController::class);

    Route::get('article/posts/checkSlug',[PostController::class,'checkSlug']);

    Route::get('categories-post',[CategoryPostController::class,'index'])->name('categories-post.index');
    Route::post('categories-post', [CategoryPostController::class, 'store'])->name('categories-post.store');
    Route::delete('categories-post/{category}', [CategoryPostController::class, 'destroy'])->name('categories-post.destroy');

});

