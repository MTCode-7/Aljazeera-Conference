<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogCommentsController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\TagsController;
use App\Http\Middleware\Admin;
use App\Http\Middleware\SuperAdmin;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return redirect()->route('blog.index');
    // return view('home');
});

Route::get('/home', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{blog}/show', [BlogController::class, 'show'])->name('blog.show');
Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create');
Route::post('/blog/store', [BlogController::class, 'store'])->name('blog.store');

// Tag Routes 

Route::get('/tags/create',[TagsController::class,'create'])->name('tags.create');
Route::get('/tags/{tag}/edit',[TagsController::class,'edit'])->name('tags.edit');
Route::post('/tags/store',[TagsController::class,'store'])->name('tags.store');
Route::put('/tags/{tag}/update',[TagsController::class,'update'])->name('tags.update');
Route::delete('/tags/{tag}/delete',[TagsController::class,'destroy'])->name('tags.delete');

Auth::routes();

// Admin

Route::get('/admin/all_bloggers',[AdminController::class,'all_bloggers'])->name('blogs.all');
Route::get('/admin',[AdminController::class,'index'])->name('admin.index')->middleware([Authenticate::class,Admin::class]);
Route::get('/blog/{blog}/edit', [BlogController::class, 'edit'])->name('blog.edit');
Route::put('/blog/{blog}/update', [BlogController::class, 'update'])->name('blog.update');
Route::any('/blog/{blog}/delete',[BlogController::class,'destroy'])->name('blog.delete');

// Info
Route::get('/about-us',[InfoController::class,'about'])->name('about');
Route::get('/contact-us',[InfoController::class,'contact'])->name('contact');


// Comments

Route::post('/comments/store',[BlogCommentsController::class,'store'])->name('comments.store');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

