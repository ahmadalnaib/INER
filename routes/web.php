<?php


use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Home');
});

Route::get('/users', function () {
    return Inertia::render('Users',[
        'time'=>now()->toTimeString()
    ]);
});

Route::get('/about', function () {
    return Inertia::render('About');
});

Route::post('/logout', function () {
    dd('logging');
});

