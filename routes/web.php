<?php

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

// Route::get('/contact', function () {
//     return view('contact');
// });

// Route::get('/events', function () {
//     return view('events');
// });

Route::get('tip-jar', function () {
    return view('tip-jar');
});

Route::get('thank-you', function () {
    return view('thankyou');
});

Route::get('/', function () {
    return view('home');
});
