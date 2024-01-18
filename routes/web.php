<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/greeting', function () {
    return 'Hello World';
});

// Route::get('/home', [UserController::class, 'index']);

Route::view('/home', 'home',['name' => 'Taylor']);

Route::get('/home/{name}', function (string $name) {
    return 'Show me!'.$name;
})->where('name', '[A-Za-z]+');

Route::get('/home/profile', function () {
    return 'Profile Show, Right!';
})->name('profile');