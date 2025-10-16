<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\OnlyAdmin;
use Illuminate\Http\Request;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Route;

// Route::view('/','home');


// Route::get('/rota', function() {
//     return 'home';
// });


// Route::match(['get', 'post'], '/injection', function(Request $request) {
//     return '<h1>aceita tanto get quanto post</h1>';
// });

// Route::any('/any', function() {
//     return 'aceita qualquer coisa (http verb)';
// });
// Route::get('/get', [MainController::class, 'index']);
// Route::get('/about', [MainController::class, 'about']);

// Route::redirect('/saltar', '/get1');
// Route::permanentRedirect('/saltar2', '/get');


// // --------------------------------
// // ROUTE PARAMETERS with constraints
// // --------------------------------


// Route::get('/exp1/{value}', function($value) {
//     echo $value;
// })->where('value', '[0-9]+'); // constraint: only numbers

// Route::get('/exp2/{value}', function($value) {
//     echo $value;
// })->where('value', '[A-Za-z0-9]+'); // constraint: only letters and numbers

// Route::get('/exp3/{value}', function($value) {
//     echo $value;
// })->where('value', '[A-Za-z0-9]+');

// // -------------------

// //  ROUTE NAMES

// // -------------------
// Route::get('/nome', function() {
//     echo 'veio da outra rota';
//     return 'esta é a rota /nome <br>que veio de outra rota';
// })->name('nome');

// Route::get('/nome2/{value}', function($value) {
//     echo $value;
// })->name('nome2');

// Route::get('/nome3/{value}', function($value) {
//     echo $value;
// })->name('nome3');


// Route::get('/rota_referenciada', function() {
//     return redirect()->route('nome');
// });

// Route::prefix('admin')->group(function () {
//     Route::get('/home', [MainController::class, 'index']);
//     Route::get('/financeiro', [MainController::class, 'about']);
//     Route::get('/management', [MainController::class, 'mostrarValor']);
// });

// Route::get('/admin.only', function () {
//     echo 'Admin area';
// })->middleware([OnlyAdmin::class]);

// Route::middleware([OnlyAdmin::class])->group(function () {
//         Route::get('/admin/only2', function () {
//             echo 'Admin area 2';
//         });
//         Route::get('/admin/only3', function () {
//             echo 'Admin area 3';
//         });
// });
// Route::prefix('users')->group(function () {
//     Route::get('/new', [UserController::class, 'new']);
//     Route::get('/edit', [UserController::class, 'edit']);
//     Route::get('/delete', [UserController::class, 'delete']);
//     Route::get('/read', [UserController::class, 'read']);
// });


// Route::fallback(function () {
//     echo '<h2 style="color: red; justify-content: center; margin: 0; display: flex;">rota inexistente. <a href="/" style="text-decoration: none; color: blue; padding-left: 20px; padding-right: 20px;">  clique aqui </a> para ir para a home</h2>';
// });

Route::get('/init', [MainController::class, 'initMethod'])->name('init');
Route::get('/view', [MainController::class, 'viewPage'])->name('view');

// single action controller


