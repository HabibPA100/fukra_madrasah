<?php

use App\Http\Controllers\ProfileController;
use App\Models\UserPost;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/dashboard', function () {
    $posts = UserPost::latest()->get();
    return view('dashboard', compact('posts'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
require __DIR__.'/user.php';
