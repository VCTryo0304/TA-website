<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TAController;

// Halaman utama (Form Input)
Route::get('/', [TAController::class, 'index'])->name('index.TA');
Route::get('/universities/{slug}', function ($slug) {
    return view('universities.' . $slug);
});
Route::get('/blog', function () {
    return view('ideahub-blog');
});
Route::get('/faq', function () {
    return view('ideahub-faq');
});