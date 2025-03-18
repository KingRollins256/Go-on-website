<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\voteController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;





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
//     // view returns the html pages.
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [DashboardController::class, 'index'])->name('about');
Route::get('/vote', [voteController::class, 'index'])->name('vote');
// Route::get('/contact', [ContactController::class, 'index'])->name('contact');
// Route::get('/staff', [StaffController::class, 'index'])->name('staff');
// Route::get('/store', [StaffController::class, 'index'])->name('store');
// Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
// Route::get('/add/{name}/{class}', [StudentController::class, 'addStudent']);




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

});
