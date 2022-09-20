<?php

use App\Http\Controllers\AuthController;
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
// Route::get("/test/{id}", [PostController::class, "test"]);
// HTTP -> GET, POST, PUT, PATCH, DELETE

Route::get("/posts/delete", [PostController::class, "destroy"]);
Route::get("/posts/create", [PostController::class, "create"])->name("createpost");

Route::get("/posts/{id}", [PostController::class, "show"]);

Route::post("/posts", [PostController::class, "store"]);
Route::put("/posts", [PostController::class, "update"]);
Route::get("/posts/{id}/edit", [PostController::class, "edit"])->name("post_edit")->middleware("auth");

Route::get("/register", [AuthController::class, "showRegister"]);
Route::get("/login", [AuthController::class, "showLogin"])->name("login");

Route::post("/register", [AuthController::class, "register"]);
Route::post("/login", [AuthController::class, "login"]);

Route::post("/logout", [AuthController::class, "logout"]);