<?php

use Illuminate\Support\Facades\Route;


Route::get('brand', 'brandController@index') -> name('brand-name');

Route::get('brand/{id}', 'brandController@show') -> name('brand-show');

Route::get('office', 'officeController@index') -> name('office-index');

Route::get('office/{id}', 'officeController@show') -> name('office-show');


