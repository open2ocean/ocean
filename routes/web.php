<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MasterProfileController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\BusinessPublicController;
use App\Http\Controllers\ConsumerController;
use App\Http\Controllers\LocationController;

use App\Http\Controllers\ErrorController;
use App\Http\Controllers\General\HomeController as Home;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/home',[Home::class,'index']);

Route::get('/login', [MainController::class, 'login'])->name('login');

Route::post('/login',[LoginController::class,'login'])->name('do-login');
// Route::post('/register',[LoginController::class,'login'])->name('do-login');

Route::post('/register',[RegisterController::class,'register'])->name('do-register');

Route::group(['middleware' => 'auth'], function () {
    // Authenticated-only routes

	Route::get('/', [MainController::class, 'index']);    
	Route::get('/dashboard', [MainController::class, 'index']);
	Route::get('/logout', [MainController::class, 'logout']);
	Route::get('/business/{id}', [BusinessController::class, 'index']);

	Route::get('/register_business',[ErrorController::class, 'handle']);

	Route::get('/business/{id}', [BusinessController::class, 'index']);
	Route::get('/create-post', [BusinessController::class, 'createPost']);
	Route::get('/profile-activate/{id}',[BusinessController::class, 'activateProfile']);
	Route::get('/settings/{id}',[BusinessController::class, 'edit']);
	Route::post('/register_business',[BusinessController::class, 'register'])->name("register_business");
	Route::get('/activation_success',[BusinessController::class, 'success']);
	Route::post('/update-business-profile',[BusinessController::class, 'update'])->name('update-business-profile');


	
	Route::get('/account-profile', [MasterProfileController::class, 'index']);
	Route::post('/upload-profile-pic',[MasterProfileController::class, 'uploadProfilePic'])->name('upload-profile-pic');
	Route::post('/update_info',[MasterProfileController::class, 'updateProfile'])->name('update-profile');

	Route::get('/browse',[BusinessPublicController::class, 'list']);			

});
Route::get('/validate-city',[LocationController::class, 'validateCity']);

Route::get('/error',[ErrorController::class, 'handle']);
Route::get('/error-no-business',[ErrorController::class, 'noBusinessFound']);
Route::get('/error-no-profile',[ErrorController::class, 'noProfileFound']);

Route::get('/{id}', [BusinessPublicController::class, 'index']);
Route::get('/browse',[BusinessPublicController::class, 'list']);



// Route::get('/', [ConsumerController::class, 'index']);