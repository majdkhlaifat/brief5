<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LessonDashboardController;
use App\Http\Controllers\LessonProfileController;
use App\Http\Controllers\LessonHouseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\auth\SignupController;
use App\Http\Controllers\Auth\LoginController;


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
// routes/web.php



Route::get('/lessons', [LessonDashboardController::class, 'index'])->name('lessons.index');
Route::resource('/lessons', LessonDashboardController::class);

Route::resource('/profile', LessonProfileController::class);
Route::resource('/addnew', LessonHouseController::class);
Route::resource('/home', HomeController::class);
Route::post('/addnew', [LessonHouseController::class, 'store'])->name('addnew.store');

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');

Route::post('login', [LoginController::class, 'login'])->name('login.check');
Route::resource('signup', SignupController::class);
Route::resource('booking', BookingController::class);
Route::post('/comments/store/{id}', [CommentController::class, 'store'])->name('comments.store');
Route::get('/showHouses', [HomeController::class, 'showHouses'])->name('showHouses');

Route::get('/payment', function () {
    return view('payment');
})->name('payment');



