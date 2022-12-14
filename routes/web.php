<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\newsController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [homeController::class,"index"]);
Route::get('/ticket', [homeController::class,"ticket"]);
Route::get('/been/spending/most/their/life/livin/in/the/gangsta/paradise', [newsController::class,"panel_admin"]);
Route::post("/a/b/c/d/e/f/gosave",[newsController::class,"store"]);