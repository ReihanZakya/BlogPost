<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostController;

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
    return view('home', [
        "title" => 'Home',
        "active" => "home",
        "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(12)->withQueryString(),
        'categories' => Category::all(),
    ]);
});

// Route::get('/about', function () {
//     return view('about', [
//         "title" => "About",
//         "active" => "about",
//         "name" => "Hitori Bocchi",
//         "email" => "bocchi@gmail.com",
//         "image" => "aku kessoku band.jpg",
//         'posts' => Post::where('user_id', auth()->user()->id)->latest()->paginate(9)
//     ]);
// })->middleware('auth');

Route::get('/posts',[PostController::class, 'index']);
Route::get('posts/{post:slug}',[PostController::class, 'show']);

Route::get('products',[ProductController::class, 'index']);
Route::get('products/{product}',[ProductController::class, 'show']);

Route::get('/categories', function(){
    return view ('categories',[
        'title' => 'Post Categories',
        "active" => "categories",
        'categories' => Category::all(),
    ]);
});

Route::get('/login',[LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class, 'authenticate']);
Route::post('/logout',[LoginController::class, 'logout']);

Route::get('/register',[RegisterController::class, 'index'])->middleware('guest');;
Route::post('/register',[RegisterController::class, 'store']);

Route::get('/dashboard', function(){
    return view ('dashboard.index',[
        'posts' => Post::where('user_id', auth()->user()->id)->latest()->paginate(9)
    ]);
})->middleware('auth');;


Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware("auth");

Route::get('/dashboard/categories/checkSlug', [AdminCategoryController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware("admin");







// Route::get('/categories/{category:slug}', function(Category $category){
//     return view ('posts',[
//         'title' => "Post by Category :  $category->name ",
//         "active" => "categories",
//         'posts' => $category->posts->load('category','author'),
//     ]);
// });

// Route::get('/authors/{author:username}', function(User $author){
//     return view ('posts',[
//         'title' => "Post by Author : $author->name",
//         "active" => "author",
//         'posts' => $author->posts->load('category','author'),
//     ]);
// });
