<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\PlaygroundsController;
use App\Http\Controllers\Admin\ReservationsController;
use App\Http\Controllers\UserSide\MasterController;
use App\Http\Controllers\UserSide\categoryController;
use App\Http\Controllers\UserSide\reservationController;
use App\Http\Controllers\UserSide\registerController;
use App\Http\Controllers\UserSide\loginController;
use App\Http\Controllers\UserSide\searchController;

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

// Route::resource('/users', UserController::class);
// Route::resource('/categories', CategoriesController::class);
// Route::resource('/playgrounds', PlaygroundsController::class);
// Route::resource('/reservation', ReservationsController::class);

Route::get('/dashboard', function () {
    return view('Admin.welcome');
})->middleware(['auth', 'verified',])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth','verified','Admin'])->group(function () {
    Route::resource('/users', UserController::class);
    Route::resource('/categories', CategoriesController::class);
    Route::resource('/playgrounds', PlaygroundsController::class);
    Route::resource('/reservation', ReservationsController::class);
    Route::get('/dashboard', function () {
        return view('Admin.welcome');
    })->name('dashboard');
    
});

require __DIR__.'/auth.php';



Route::get('/',[MasterController::class,'index'])->name('puplicUser.welcome');
Route::get('/fields',[categoryController::class,'index'])->name('puplicUser.fields');
Route::get('/reservation',[reservationController::class,'index'])->name('puplicUser.reservation');
Route::get('/register',[registerController::class,'index'])->name('puplicUser.register');
Route::get('/login',[loginController::class,'index'])->name('puplicUser.login');


Route::get('/about', function () {
    return view('puplicUser.about');
});
Route::get('/contact', function () {
    return view('puplicUser.contact');
});
Route::get('/UserProfile',function(){
    return view('puplicUser.userprofile');
});
Route::get('/Edit',function(){
    return view('puplicUser.userprofileEdit');
});
Route::get('singleItem',function(){
    return view('singleItem');
});

