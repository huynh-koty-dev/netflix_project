<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ChangeLanguage;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MovieController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

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

Route::group(['middleware' => 'locale'], function() {
    Route::get('change-language/{language}', [ChangeLanguage::class,'changeLanguage'])
        ->name('user.change-language');
    Route::post('/login_user',[UserController::class,'login'])->name('login_user');
    Route::post('/register_user',[UserController::class,'register'])->name('register_user');
    Route::get('/register',[UserController::class,'registerView'])->name('register_view');
    Route::get('/intro',[UserController::class,'loginView'])->name('login_view');
    Route::get('/logout',[UserController::class,'logout'])->name('logout');
    Route::middleware(['auth-user'])->group(function () {
        Route::get('/',[MovieController::class,'index'])->name('home');
        Route::get('/show/{name}/{id}',[MovieController::class,'show'])->name('detail');
        Route::get('/{name}/watch={id}&episode={episode_id?}',[MovieController::class,'watchMovie'])->name('watch_movie');
    });

    Route::get('user/verify',[UserController::class,'verify_view'])->name('verify.email');
    Route::get('user/reset',[UserController::class,'reset_view'])->middleware('check_token')->name('reset_view');
    Route::post('user/verify',[UserController::class,'verifyEmail'])->name('verify');
    Route::post('resetPassword',[UserController::class,'reset_password'])->name('reset.pass');
    Route::get('check_token',[UserController::class,'check_token_view'])->name('token_view');
    Route::post('check_token',[UserController::class,'check_token'])->name('check_token');
});
