<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\Blog;
use App\Http\Controllers\UserController;
use App\Models\Author;
use App\Models\Gategory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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


// welcoming website route

Route::get('/', function () {
    return view('welcomingSite.index');
});

// login and logout Controller routes

Route::post('/loginAuth',[AuthController::class,'loginAuth'])->name('user.loginAuth');
Route::get('/logoutAuth',[AuthController::class,'logoutAuth'])->name('user.logoutAuth');

// user controller routes

Route::prefix('user/')->group(function() {
    Route::controller(UserController::class)->group(function() {
        Route::get('/{id}/profile','getProfile')->name('user.profile');
        Route::get('/register','getrgisterForm')->name('user.register');
        Route::get('/login','getLoginForm')->name('user.login');
        Route::post('/register/store','store')->name('user.store');
        Route::get('/{id}/edit','edit')->name('user.edit');
        Route::post('/{id}/update','update')->name('user.update');
        Route::delete('/{id}/destroy','destroy')->name('user.destroy');
        Route::post('/{id}/editProfilePic','editProfilePic')->name('user.editProfilePic');
    });
});

// blog route

Route::controller(Blog::class)->group(function() {
    Route::get('Blog','getBlogWebsite')->name('getBlogWebsite');
});

// author.post routes

Route::resource('author.posts',AuthorController::class);
Route::get('{author}/postArticle/{post}',[AuthorController::class,'postArticle'])->name('postArticle');
Route::get('{author}/draftArticle/{post}',[AuthorController::class,'draftArticle'])->name('draftArticle');




Route::get('/fillG',function (){
    $gategory = new Gategory();

//    $gategory->name = 'Web Development';
//    $gategory->name = 'App Development';
//    $gategory->name = 'Artificial Intelligence';
//    $gategory->name = 'Data Science';
//    $gategory->name = 'Web Design';
//    $gategory->name = 'Datadase Management';
    $gategory->save();
})->name('test');

Route::get('/test',function(){

})->name('test');

