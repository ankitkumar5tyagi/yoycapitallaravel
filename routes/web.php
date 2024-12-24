<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;

Route::get('/about',[PageController::class, 'showAbout'])->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');



Route::get('/services',[ServiceController::class, 'showServices'])->name('services');

Route::get('/',[PageController::class, 'showHome'])->name('home');



Route::Fallback(function(){
    return ('404 Error : Sorry this page is not available');
});



Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::resource('serviceadmin', ServiceController::class);