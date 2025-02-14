<?php

use App\Http\Controllers\Frontend\AboutUsController;
use App\Http\Controllers\Frontend\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/about-us',[AboutUsController::class,'index'])->name('about.us');
Route::get('/contact-us',[AboutUsController::class,'contact'])->name('contact.us');
Route::get('/result-sheet',[AboutUsController::class,'result'])->name('result.sheet');
Route::get('/kirat-bivag/result-sheet',[AboutUsController::class,'kirat_result'])->name('result.sheet.kirat');
Route::get('/class-routine',[AboutUsController::class,'routine'])->name('class.routine');
Route::get('/class-routine/kirat-bivag',[AboutUsController::class,'kirat_routine'])->name('class.routine.kirat');
Route::get('/privacy-policy',[AboutUsController::class,'privacy'])->name('privacy.policy');
Route::get('/terms-condition',[AboutUsController::class,'terms'])->name('terms.condition');
Route::get('/payment-option',[AboutUsController::class,'payment'])->name('payment');
Route::resource('/post',PostController::class);