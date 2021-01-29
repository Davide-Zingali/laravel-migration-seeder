<?php

use Illuminate\Support\Facades\Route;


Route::get('brand', 'brandController@index') -> name('brand');

Route::get('office', 'officeController@index') -> name('office');

