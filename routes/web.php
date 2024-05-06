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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('home', [
        'name' => 'Alex',
        'age' => 30,
        'position' => 'Developer',
        'address' => 'Bragino Street, 54/32'
    ]);
});
Route::get('/contacts', function () {
    return view('contacts', [
        'address' => 'Bragino Street, 54/32',
        'post_code' => '12345',
        'email' => 'alex@ya.ru',
        'phone' => '+1234567890'
    ]);
});
