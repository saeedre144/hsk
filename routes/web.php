<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('front.home');
})->name('home');

Route::get('/contact', function () {
    return view('front.contact');
})->name('contact');

Route::get('/about', function () {
    return view('front.about');
})->name('about');
Route::get('/overview', function () {
    return view('front.overview');
});

Route::get('products/glasses',[\App\Http\Controllers\Front\PostController::class, 'items'] )->name('product.glass');
Route::get('products/glasses/{post}',[\App\Http\Controllers\Front\PostController::class, 'singleitem'] );






Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //admin routes

    Route::any('category/create', [CategoryController::class, 'createCategory'])->name('createCategory');
    Route::get('categories', [CategoryController::class, 'allCategories'])->name('allCategories');
    Route::any('category/edit/{id}', [CategoryController::class, 'editCategory'])->name('editCategory');
    Route::get('category/delete/{id}', [CategoryController::class, 'deleteCategory'])->name('deleteCategory');

    Route::resource('admin/posts', \App\Http\Controllers\Admin\PostController::class);
});

require __DIR__.'/auth.php';
