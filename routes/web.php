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

Route::get('/', [WelcomeController::class, 'show'])->middleware(['auth']);
Route::get('/articles', function() {
    return view('articles', [
        'articles' => App\Models\Article::take(3)->latest()->get()
    ])->middleware(['auth']);
});


Route::get('/profile', [ProfileController::class, 'show'])->middleware(['auth']);
Route::get('/photos', [PhotosController::class, 'show'])->middleware(['auth']);
Route::get('/hbo', [HBOController::class, 'show'])->middleware(['auth']);
Route::get('/grades', [GradeController::class, 'show'])->middleware(['auth']);
Route::get('/motivation', [MotivationController::class, 'show'])->middleware(['auth']);
Route::get('/profession', [ProfessionController::class, 'show'])->middleware(['auth']);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth']);

//Route Articles
Route::resource('/articles', ArticlesController::class)->middleware(['auth']);

// Route FAQ
Route::resource('/faq', FAQController::class)->middleware(['auth']);

// Route Grade
Route::resource('/grades', GradeController::class)->middleware(['auth']);

Route::resource('/course', CourseController::class)->middleware(['auth']);

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';



