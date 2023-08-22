<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashboardPostNews;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardNewsController;
use App\Http\Controllers\DashboardTagsController;
use App\Http\Controllers\DashboardTentang;
use App\Http\Controllers\DashboardVisi;
use App\Http\Controllers\DashboardKirim;
use App\Http\Controllers\DashboardKonsultasi;
use App\Http\Controllers\DashboardTanya;
use App\Http\Controllers\DashboardContact;
use App\Http\Controllers\DashboardSosmed;
use App\Http\Controllers\DashboardStore;
use App\Http\Controllers\DashboardPosTags;
use App\Http\Controllers\DashboardUserController;
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
//     return view('home', [
//         "title" => "Home",
//         "active" => 'home'
//     ]);
// });
Route::get('/', [PostController::class, 'home']);
Route::get('/tentang-kami', [PostController::class, 'tentang']);
Route::get('/visi-misi', [PostController::class, 'visi']);
Route::get('/konsultasi-hukum', [PostController::class, 'konsultasi']);
Route::get('/tanya-hukum', [PostController::class, 'tanya']);
Route::get('/kirim-tulisan', [PostController::class, 'kirim']);
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => 'about',
        "nama" => "sandhika",
        "email" => "sandhika@gmail.com"
    ]);
});


Route::get('/blog', [PostController::class, 'index']);
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);
Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});

// Route::get('/categories/{category:slug}', function (Category $category) {
//     return view('posts', [
//         'title' => "Post By Category : $category->name",
//         'active' => 'categories',
//         'posts' => $category->posts->load('category', 'author')
//     ]);
// });

// Route::get('/authors/{author:username}', function (User $author) {
//     return view('posts', [
//         'title' => "Post By Author : $author->name", 
//         'active' => 'posts',
//         'posts' => $author->posts->load('category', 'author'),

//     ]);
// });

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
// route::delete('/dashboard/posts/{post}', [DashboardPostController::class, 'destroy']);

Route::get('/dashboard/postnews/checkSlug', [DashboardPostNews::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/postnews', DashboardPostNews::class)->middleware('auth');

Route::get('/dashboard/postag/checkSlug', [DashboardPosTags::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/postag', DashboardPosTags::class)->middleware('auth');
Route::get('/dashboard/postag/show/{slug}', [DashboardPosTags::class, 'show'])->middleware('auth');
// Route::get('dashboard/postag/edit/{id}', [ErpController::class, 'edit']);
// Route::post('dashboard/postag/update/{id}', [ErpController::class, 'update']);

Route::get('/dashboard/categories/checkSlug', [AdminCategoryController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('is_admin');

Route::get('/dashboard/news/checkSlug', [DashboardNewsController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/news', DashboardNewsController::class)->except('show')->middleware('is_admin');

Route::get('/dashboard/tags/checkSlug', [DashboardTagsController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/tags', DashboardTagsController::class)->except('show')->middleware('is_admin');

Route::get('/dashboard/user/edit/{id}', [DashboardUserController::class, 'tampiledit'])->middleware('is_admin');
Route::get('/dashboard/user/checkSlug', [UserController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/user', DashboardUserController::class)->middleware('is_admin');

Route::get('/dashboard/tentang/checkSlug', [DashboardTentang::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/tentang', DashboardTentang::class)->except('show')->middleware('is_admin');

Route::get('/dashboard/visi/checkSlug', [DashboardVisi::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/visi', DashboardVisi::class)->middleware('auth');

Route::get('/dashboard/kirim/checkSlug', [DashboardKirim::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/kirim', DashboardKirim::class)->middleware('auth');

Route::get('/dashboard/konsultasi/checkSlug', [DashboardKonsultasi::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/konsultasi', DashboardKonsultasi::class)->middleware('auth');

Route::get('/dashboard/tanya/checkSlug', [DashboardTanya::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/tanya', DashboardTanya::class)->middleware('auth');

Route::get('/dashboard/contact/checkSlug', [DashboardContact::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/contact', DashboardContact::class)->middleware('auth');

Route::get('/dashboard/sosmed/checkSlug', [DashboardSosmed::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/sosmed', DashboardSosmed::class)->middleware('auth');

Route::get('/dashboard/store/checkSlug', [DashboardStore::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/store', DashboardStore::class)->middleware('auth');

// Route::resource('/dashboard/categories', AdminCategoryController::class);
