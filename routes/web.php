<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact/price', function () {
    return view('contactPrice');
});

Route::get('/contact/phone', function () {
    return view('contactPhone');
});

Route::post('/contact/price/send', 'ContactController@send');

Route::post('/contact/phone/send', 'ContactController@store');
