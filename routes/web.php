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

Route::get('/Produkte', function () {
    return Inertia::render('Produkte',[
        'time'=>now()->toTimeString()
    ]);
});

Route::get('/About', function () {
    return Inertia::render('About');
});

Route::post('/logout', function () {
    dd('logging');
});

