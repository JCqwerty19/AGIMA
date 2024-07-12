<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route to show form page
Route::get('/', 'FormController@index')->name('form.index');

// Route to save form data in public/data.txt
Route::post('/', 'FormController@data')->name('form.data');