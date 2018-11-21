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
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/home/{{$reg}}', function () {
    return view('homeLogin');
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

Route::get('/exibitionLogin', function () {
    return view('exibitionLogin');
});

Route::get('/artworks', function () {
    return view('artworks');
});

Route::get('/artworksLogin/{{$reg}}', function () {
    return view('artworksLogin');
});

Route::get('/booking', function () {
    return view('booking');
});

Route::get('/bookingLogin/{{$reg}}', function () {
    return view('bookingLogin');
});





//REGISTER
$router->post('/register/save','RegisterController@save');

//EXIBITION
$router->get('/exibition', 'ExibitionController@index');
$router->get('/exibition/{id}/delete','ExibitionController@delete');
$router->get('/exibitionLogin/{reg}', 'ExibitionController@indexLogin');
$router->get('/exibitionLogin/{id}/{reg}/booking', 'ExibitionController@booking');


//BOOKING
$router->get('/booking', 'BookingController@index');
$router->get('/booking/{reg}', 'BookingController@booking');
$router->get('/bookingLogin/{reg}', 'BookingController@indexLogin');
$router->get('/bookingLogin/{id}/{reg}/booking', 'BookingController@booking');

//LOGIN
$router->get('/login', 'LoginController@setlogin');
$router->post('/login/save','LoginController@loginresult');

//HOMELOGIN

//ARTWORKS
$router->get('/artworks', 'ExibitionController@index');
$router->get('/artworksLogin/{reg}', 'ArtworksController@indexLogin');
