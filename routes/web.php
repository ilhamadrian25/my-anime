<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Frontend\GenreController;
use App\Http\Controllers\Frontend\DetailsController;

use App\Http\Controllers\Frontend\ProfileController;
use App\Http\Controllers\Frontend\CountryController;
use App\Http\Controllers\Frontend\EpisodeController;
use App\Http\Controllers\Frontend\MusimController;
use App\Http\Controllers\Frontend\SeasonController;
use App\Http\Controllers\Frontend\StatusController;
use App\Http\Controllers\Frontend\StudioController;
use App\Http\Controllers\Frontend\Type_urlController;
use App\Http\Controllers\Frontend\TypeController;
use App\Models\Episode;
use App\Models\Type_url;
use Illuminate\Auth\Events\Login;

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

// Frontend
Route::get('/', [HomeController::class, 'index'])->name('home');



Route::get('/anime/{id}', [HomeController::class, 'show'])->name('detail-anime');
Route::get('/nonton', [HomeController::class, 'show2'])->name('wacth-anime');



// register
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
// login
Route::get('/login', [LoginController::class, 'index'])->name("login")->middleware('guest');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');
Route::get('/sign-out', [LoginController::class, 'show'])->name('signout');


// admin
Route::prefix('admin')->middleware('user-access:admin')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile-admin');
    Route::resource('genre', GenreController::class);
    Route::resource('type', TypeController::class);
    Route::resource('status', StatusController::class);
    Route::resource('musim', MusimController::class);
    Route::resource('studio', StudioController::class);
    Route::resource('country', CountryController::class);
    Route::resource('episode', EpisodeController::class);
    Route::resource('detail', DetailsController::class);
    Route::resource('season', SeasonController::class);
    Route::resource('type_url', Type_urlController::class);

});

// anggota
Route::prefix('anggota')->middleware('user-access:anggota')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->middleware('auth')->name('profile-anggota');
});

