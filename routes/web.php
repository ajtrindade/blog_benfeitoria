<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\PostController;
use App\Models\Posts;

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
    $posts=Posts::all();
    return Inertia::render('Home', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
        'posts'=>$posts,

    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/createpost', function () {
    return Inertia::render('InsertPost');
})->name('createpost');
Route::middleware(['auth:sanctum', 'verified'])->get('/deletepost', [PostController::class,'deletePost'])->name('deletepost');

Route::middleware(['auth:sanctum', 'verified'])->post('/insertposts', [PostController::class,'store'])->name('insertposts');
Route::middleware(['auth:sanctum', 'verified'])->post('/deleteposts/{id}', [PostController::class,'destroy'])->name('deleteposts');