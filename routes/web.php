<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// =========================
// DelCargo Pages
// =========================

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/products', function () {
    return view('products');
})->name('products');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');


// =========================
// User Management
// =========================

// Show Add User form
Route::get('/users/create', [UserController::class, 'create'])
    ->name('users.create');

// Save User
Route::post('/users', [UserController::class, 'store'])
    ->name('users.store');

// Show all Users
Route::get('/admin/users', [UserController::class, 'index'])
    ->name('admin.users');

// Show Edit User form
Route::get('/users/{id}/edit', [UserController::class, 'edit'])
    ->name('users.edit');

// Update User
Route::put('/users/{id}', [UserController::class, 'update'])
    ->name('users.update');

// Delete User
Route::delete('/users/{id}', [UserController::class, 'destroy'])
    ->name('users.destroy');