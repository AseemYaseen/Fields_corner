<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\PlaygroundsController;
use App\Http\Controllers\Admin\ReservationsController;

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
    return view('Admin.login');
});

// Route::get('dashoard', function () {
//     return view('Admin.welcome');
// });

// Route::get('/users', function () {
//     return view('Admin.usersTable');
// });
Route::resource('/users', UserController::class);
Route::resource('/categories', CategoriesController::class);
Route::resource('/playgrounds', PlaygroundsController::class);
Route::resource('/reservation', ReservationsController::class);

Route::get('/dashboard', function () {
    return view('Admin.welcome');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
