<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PhotosController;
use App\Http\Controllers\HBOController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\MotivationController;
use App\Http\Controllers\ProfessionController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\GradeController;



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

Route::get('/posts/{post}',  [PostsController::class, 'show']);

Route::get('/', [WelcomeController::class, 'show']);
Route::get('/articles', function() {
    return view('articles', [
        'articles' => App\Models\Article::take(3)->latest()->get()
    ]);
});


Route::get('/profile', [ProfileController::class, 'show']);
Route::get('/photos', [PhotosController::class, 'show']);
Route::get('/hbo', [HBOController::class, 'show']);
Route::get('/grades', [GradeController::class, 'show']);
Route::get('/faq', [FAQController::class, 'show']);
Route::get('/motivation', [MotivationController::class, 'show']);
Route::get('/profession', [ProfessionController::class, 'show']);

//Route Articles
Route::resource('/articles', ArticlesController::class);

// Route FAQ
Route::resource('/faq', FAQController::class);

// Route Grade
Route::resource('/grades', GradeController::class);

Route::resource('/course', CourseController::class);


