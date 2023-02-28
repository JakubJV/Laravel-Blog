<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

// Vrací landing page
// Route::get('/', [PostsController::class, 'home']);

Route::get('/index', [PostsController::class, 'index']);

// Posílá data o zaregistrovaném uživateli do databáze
Route::post('/users', [UserController::class, 'store']);

// Vrací přihlašovací formulář
Route::get('/login', [UserController::class, 'login']);

// Vrací registrační formulář
Route::get('/register', [UserController::class, 'register']);

// Odhlášení uživatele
Route::post('/logout', [UserController::class, 'logout']);

Route::post('/users/authenticate', [UserController::class, 'authenticate']);

// Ukládá příspěvky do databáze
Route::post('/create', [PostsController::class, 'store'])->name('store');

// Vrací formulář pro vkládání příspěvků
Route::get('/create', [PostsController::class, 'create']);

// Slouží pro vrácení jednoho konkrétního příspěvku
Route::get('/post/{id}', [PostsController::class, 'show']);
