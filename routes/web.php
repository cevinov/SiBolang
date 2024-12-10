<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Hello from Laravel!';
});

Route::get('/test', function () {
    return 'This is a test route';
});
