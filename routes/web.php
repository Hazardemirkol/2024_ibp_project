<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserProductController;

Route::get('/messages', [MessageController::class, 'index'])->name('messages.index');
Route::get('/messages/{id}', [MessageController::class, 'show'])->name('messages.show');
Route::delete('/messages/{id}', [MessageController::class, 'destroy'])->name('messages.destroy');
Route::get('/reply-form/{messageId}', [MessageController::class, 'showReplyForm'])->name('show_reply_form');;
Route::post('/messages/{message}/reply', [MessageController::class, 'reply'])->name('messages.reply');
Route::post('/dashboard', [MessageController::class, 'index'])->name('dashboard.index');
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');

})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/announcements', [AnnouncementController::class, 'index'])->name('announcements.index');
    Route::get('/announcements/search', [AnnouncementController::class, 'search'])->name('announcements.search');
    Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.form');
    Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');
    Route::post('/messages', [MessageController::class, 'store'])->name('messages.store');
    Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact.submit');
    Route::post('/messages/submit', [MessageController::class, 'submit'])->name('messages.submit');
    Route::get('/product', [UserProductController::class, 'show'])->name('product.show');
    Route::post('dashboard', [MessageController::class, 'showDashboard'])->name('dashboard.index');
    Route::get('/product', [UserProductController::class, 'index'])->name('product.index');

});
Route::middleware('auth')->get('/user/messages', [MessageController::class, 'getUserMessages']);

Route::middleware(['auth'])->group(function () {
    Route::post('/posts/store', [PostController::class, 'store'])->name('posts.store');
    Route::post('/admin/posts', [PostController::class, 'show'])->name('admin.posts.show');
    Route::post('/dashboard', [MessageController::class, 'showDashboard'])->name('dashboard.index');
});
Route::middleware(['auth', 'admin'])->group(function () {
    // Diğer admin rotaları buraya eklenecek
    Route::get('admin/dashboard', [HomeController::class, 'index'])->name('admin.dashboard');
    Route::post('/dashboard', [MessageController::class, 'index'])->name('dashboard.index');

    Route::get('/admin/users', [UserController::class, 'index'])->name('admin/users');

    Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users.index');
    Route::get('/admin/users/create', [UserController::class, 'create'])->name('admin.users.create');
    Route::post('/admin/users/save', [UserController::class, 'save'])->name('admin.users.save');
    Route::get('/admin/users/edit/{id}', [UserController::class, 'edit'])->name('admin.users.edit');
    Route::put('/admin/users/update/{id}', [UserController::class, 'update'])->name('admin.users.update');
    Route::delete('/admin/users/delete/{id}', [UserController::class, 'delete'])->name('admin.users.delete');
    Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users.index');
    Route::get('/admin/dashboard/', [MessageController::class,'index'])->name('admin.dashboard.index');
    Route::get('/admin/product/index', [ProductController::class, 'index'])->name('admin.product.index');
    Route::get('/admin/posts', [PostController::class, 'index'])->name('admin.posts.index'); // posts.index route
    Route::get('/admin/posts/index', [PostController::class, 'index'])->name('admin.posts.index');
    Route::get('/admin/posts', [PostController::class, 'index'])->name('posts.index');
    Route::post('/admin/posts', [PostController::class, 'show'])->name('admin.posts.show');
    Route::put('/admin/posts/{post}', [PostController::class, 'update'])->name('posts.update');
    Route::get('admin/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
    Route::put('/admin/posts/{post}', [PostController::class, 'update'])->name('admin.posts.update');
    Route::get('/posts/search', [PostController::class, 'search'])->name('posts.search');
    Route::get('/admin/users/search', [UserController::class, 'search'])->name('admin.users.search');
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('/admin/messages/reply', [MessageController::class, 'reply'])->name('admin.messages.reply');
    Route::get('/admin/messages', [MessageController::class, 'index'])->name('admin.messages.index');
    Route::post('/admin/refresh', [MessageController::class, 'refresh'])->name('admin.refresh');
    Route::post('/admin/reply/{message}', [MessageController::class, 'reply'])->name('admin.reply');
    Route::post('/admin/messages/reply', [MessageController::class, 'reply'])->name('admin.messages.reply');
    Route::get('/admin/products', [ProductController::class, 'index']);
    Route::get('/admin/product/edit/{id}', [ProductController::class, 'edit'])->name('admin.product.edit');
    Route::put('/admin/product/update/{id}', [ProductController::class, 'update'])->name('admin.product.update');
    Route::delete('/admin/product/delete/{id}', [ProductController::class, 'destroy'])->name('admin.product.destroy');
    Route::get('/admin/product/search', [ProductController::class, 'search'])->name('admin.product.search');
    Route::get('/admin/product/create', [ProductController::class,'create'])->name('admin.product.create');
    Route::post('/admin/product/store', [ProductController::class,'store'])->name('admin.product.store');
    Route::get('/admin/dashboard', [HomeController::class, 'index'])->name('admin.dashboard');




});
    Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');

    Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
    Route::get('/personal', function () {
    return view('personal');
});

Route::get('Personal', function () {
    return 'Personal route is defined!';
});
Route::get('/personal', [HomeController::class, 'personal'])->name('personal');
// routes/web.php
require __DIR__.'/auth.php';
