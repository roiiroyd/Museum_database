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

Route::get('/login', function () {
    return view('login');
});

Route::get('/regis', function () {
    return view('register');
});

Route::get('/exhibition', function () {
    return view('exhibition');
});

Route::get('/exhibitionLogin', function () {
    return view('exhibitionLogin');
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

Route::get('/admin', function () {
    return view('admin');
});




//HOME
$router->get('/home/{reg}','RegisterController@homeLogin');

//REGISTER
$router->post('/register/save','RegisterController@save');

//EXIBITION
$router->get('/exhibition', 'ExhibitionController@index');
$router->get('/exhibition/{id}/delete','ExhibitionController@delete');
$router->get('/exhibition/{id}/view','ExhibitionController@view');
$router->get('/exhibitionLogin/{id}/delete','ExhibitionController@delete');
$router->get('/exhibitionLogin/{reg}', 'ExhibitionController@indexLogin');
$router->get('/exhibitionLogin/{id}/{reg}/booking', 'ExhibitionController@booking');
$router->get('/exhibitionDetailLogin/{id}/{reg}/view','ExhibitionController@viewLogin');


//BOOKING
$router->get('/booking', 'BookingController@index');
$router->get('/booking/{reg}', 'BookingController@booking');
$router->get('/booking/{id}/login', 'LoginController@showLoginBooking');
$router->post('/booking/{id}/checkLogin', 'LoginController@loginToBooking');
$router->get('/bookingLogin/{reg}', 'BookingController@indexLogin');
$router->get('/bookingLogin/{id}/{reg}/booking', 'BookingController@booking');

//LOGIN
$router->get('/login', 'LoginController@setlogin');
$router->post('/login/save','LoginController@loginresult');

//HOMELOGIN
$router->get('/homeLogin/{reg}', 'LoginController@show');


//ARTWORKS
$router->get('/artworkPaint', 'ArtworksController@showIndexPaint');
$router->get('/artworkSculpture', 'ArtworksController@showIndexSculpture');
$router->get('/artworkStatue', 'ArtworksController@showIndexStatue');
$router->get('/artworkOther', 'ArtworksController@showIndexOther');
$router->get('/artworkPaintLogin/{reg}', 'ArtworksController@showIndexPaintLogin');
$router->get('/artworkSculptureLogin/{reg}', 'ArtworksController@showIndexSculptureLogin');
$router->get('/artworkStatueLogin/{reg}', 'ArtworksController@showIndexStatueLogin');
$router->get('/artworkOtherLogin/{reg}', 'ArtworksController@showIndexOtherLogin');
