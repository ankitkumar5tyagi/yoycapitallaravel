<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\openServiceController;
use App\Http\Controllers\DBCustomerController;

Route::get('/about',[PageController::class, 'showAbout'])->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');



Route::get('/services',[PageController::class, 'showServices'])->name('services');

Route::get('/',[PageController::class, 'showHome'])->name('home');

Route::get('/example', function () {
    return view('example');
})->name('example');



// Route::Fallback(function(){
//     return view('home');
// });



Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');


Route::get('/openservice', [openServiceController::class, 'openservice']);

Route::get('/customer', [DBCustomerController::class, 'showCustomer']);


