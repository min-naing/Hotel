<?php

Route::get('/', function () {
    return view('index');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/discount', function () {
    return view('discount');
});

Route::get('/room_category', function () {
    return view('room_category');

});

Route::get('/about', function () {
    return view('about');

});
Route::get('/contact', function () {
    return view('contact');

});

Route::get('/wedding', function () {
    return view('wedding');

});

Route::get('/luxury', function () {
    return view('luxury');

});
Route::get('/rooms', function () {
    return view('rooms');

});

Route::get('/book', function () {
    return view('book');

});
Route::get('/laundry', function () {
    return view('laundry');

});






