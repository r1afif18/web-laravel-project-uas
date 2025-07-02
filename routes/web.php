<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestimonialController;

// Admin Routes
Route::prefix('admin')->group(function () {
    Route::resource('products', ProductController::class);
    Route::resource('testimonials', TestimonialController::class);
});

// Frontend Route
Route::get('/', function () {
    $products = \App\Models\Product::all();
    $testimonials = \App\Models\Testimonial::all();
    
    return view('welcome', [
        'products' => $products,
        'testimonials' => $testimonials
    ]);
});