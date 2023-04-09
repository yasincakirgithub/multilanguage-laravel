<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;

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

// Route::get('lang/change', [LangController::class, 'change'])->name('changeLang');

// Route::get('/login', [AuthController::class, 'login'])->name('login');
// Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
// Route::post('/login-post', [AuthController::class, 'login_post'])->name('login-post');

// Route::get('/', [PageController::class, 'homepage'])->name('homepage');
// Route::get('/about', [PageController::class, 'about'])->name('about');
// Route::get('/contact', [PageController::class, 'contact'])->name('contact');
// Route::post('/create-contact', [PageController::class, 'create_contact'])->name('create-contact');

Route::redirect('/', '/en');


Route::group(['prefix' => '{language}'], function () {

    Route::post('/login-post', [AuthController::class, 'login_post'])->name('login-post');
    Route::post('/create-contact', [PageController::class, 'create_contact'])->name('create-contact');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::get('/', [PageController::class, 'homepage'])->name('homepage');
    Route::get('/about', [PageController::class, 'about'])->name('about');
    Route::get('/contact', [PageController::class, 'contact'])->name('contact');
    
});



// Route::group(['middleware' => 'auth'], function () {

// });