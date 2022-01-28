<?php

use Illuminate\Support\Facades\Route;


Route::get('/', ['as'=>'home' ,function () {
    return view('home');
}]);
