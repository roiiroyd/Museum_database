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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/regis', function () {
    return view('register');
});

Route::get('/exibition', function () {
    return view('exibition');
});


//REGISTER
$router->post('/register/save','RegisterController@save');

//EXIBITION
$router->get('/exibition', 'ExibitionController@index');
$router->get('/exibition/{id}/delete','ExibitionController@delete');

//LOGIN
$router->get('/login', 'LoginController@setlogin');
$router->post('/login/save','LoginController@loginresult');