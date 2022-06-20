<?php

use Illuminate\Support\Facades\Route;

Route::get('/Name/{namevalue}', 'App\Http\Controllers\DemoController@MyName');
