<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    $image = "background: url('../images/1-doctor.jpeg') no-repeat; ";
    return view('inicio.inicio', ['image' => $image]);
});

Route::get('/candidato', function(){
    $image = "background: url('../images/2-doctor.jpeg') no-repeat; ";
    return view('inicio.candidato', ['image' => $image]);
});

Route::get('/cirugias', function(){
    $image = "background: url('../images/3-doctor.jpeg') no-repeat; ";
    return view('inicio.cirugias', ['image' => $image]);
});


Route::get('/about', function(){
    $image = null;//"background: url('../images/3-doctor.jpeg') no-repeat; ";
    return view('inicio.about', ['image' => $image]);
});

Route::post('/mail/send', 'MailController@send');