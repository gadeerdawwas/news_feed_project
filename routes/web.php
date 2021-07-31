<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\PostController;

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

Route::get('/about', function () {
    return view('Home.about');
});
Route::prefix('/')->group(function(){
    Route::get('homepage',[HomePageController::class,'index'])->name('homepage');
    Route::get('about',[HomePageController::class,'about'])->name('about');
    Route::get('contact',[HomePageController::class,'contact'])->name('contact');

});


Route::prefix('user')->name('user.')->group(function(){
    Route::get('login',[AdminController::class,'login'])->name('login');
    Route::post('login',[AdminController::class,'sendlogin'])->name('sendlogin');
    Route::get('register',[AdminController::class,'register'])->name('register');
    Route::post('register',[AdminController::class,'sendregister'])->name('sendregister');
    Route::get('logout',[AdminController::class,'logout'])->name('logout');

});

Auth::routes();
Route::prefix('admin')->name('admin.')->group(function(){

    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/allpost', [HomeController::class, 'allpost'])->name('allpost');
    Route::get('/createpost', [HomeController::class, 'createpost'])->name('createpost');
    Route::post('/createpost', [HomeController::class, 'save_post'])->name('createpost');
    Route::get('/editpost/{id}', [HomeController::class, 'editpost'])->name('editpost');
    Route::post('/editpost/{id}', [HomeController::class, 'updatepost'])->name('updatepost');
    Route::get('/delete/{id}', [HomeController::class, 'delete'])->name('delete');
    Route::get('/news', [HomeController::class, 'news'])->name('news');

    Route::get('/createnews', [HomeController::class, 'createnews'])->name('createnews');
    Route::post('/createnews', [HomeController::class, 'save_news'])->name('createnews');
    Route::get('/editnews/{id}', [HomeController::class, 'editnews'])->name('editnews');
    Route::post('/editnews/{id}', [HomeController::class, 'updatenews'])->name('editnews');
    Route::get('/deletenew/{id}', [HomeController::class, 'deletenew'])->name('deletenew');

    // Route::get('login',[HomeController::class,'login'])->name('login');
    // Route::get('register',[HomeController::class,'register'])->name('register');
});


// Route::resource('/post',PostController::class);

