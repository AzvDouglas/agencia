<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/cassio', function () {
    return view('sobre.cassio');
});

Route::get('/douglas', function () {
    return view('sobre.douglas.');
});
