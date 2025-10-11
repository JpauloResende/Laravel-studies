<?php

use App\Http\Controllers\MainController;
use Illuminate\Http\Request;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Route;

Route::view('/','home');


Route::get('/rota', function() {
    return 'home';
});


Route::match(['get', 'post'], '/injection', function(Request $request) {
    return '<h1>aceita tanto get quanto post</h1>';
});

Route::any('/any', function() {
    return 'aceita qualquer coisa (http verb)';
});
Route::get('/get', [MainController::class, 'index']);
Route::get('/about', [MainController::class, 'about']);

Route::redirect('/saltar', '/get1');
Route::permanentRedirect('/saltar2', '/get');


// --------------------------------
// ROUTE PARAMETERS
// --------------------------------

Route