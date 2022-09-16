<?php

use App\Http\Controllers\PostController;
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

Route::get('/', [PostController::class, "index"]);
Route::get("/test/{id}", [PostController::class, "test"]);
// HTTP -> GET, POST, PUT, PATCH, DELETE

Route::get("/posts/delete", [PostController::class, "destroy"]);

Route::get("/posts/{id}", [PostController::class, "show"]);

Route::post("/posts", [PostController::class, "store"]);
Route::put("/posts", [PostController::class, "update"]);
Route::get("/posts/create", [PostController::class, "create"]);
Route::get("/posts/{id}/edit", [PostController::class, "edit"]);

