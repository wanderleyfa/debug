<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $x = 1 + 1;

    $y = $x;

    return ['Laravel' => app()->version()];
});

require __DIR__ . '/auth.php';
