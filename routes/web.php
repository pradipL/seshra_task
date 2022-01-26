<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('home');
});


Route::get('registration',function(){
    return view('home');
});
Route::get('reg', function()
{
    return view('registration');
});
Route::get('login', function()
{
    return view('home');
});

Route::POST('home', [UserController::class, 'insert']);
Route::POST('log', [UserController::class, 'login']);
Route::GET('dashboard', [UserController::class, 'showdata']);
Route::GET('logout', [UserController::class, 'logout']);
Route::GET('edit', [UserController::class, 'edit']);
Route::POST('update', [UserController::class, 'update']);
Route::GET('delete', [UserController::class, 'delete']);

