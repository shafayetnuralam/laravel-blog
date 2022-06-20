<?php

use Illuminate\Support\Facades\Route;

Route::get('/Name/{firstName}/{middeName}/{lastName}/', 'App\Http\Controllers\DemoController@MyName');
