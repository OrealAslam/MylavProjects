<?php

use Illuminate\Support\Facades\Route;
// importing controllers
use App\Http\Controllers\Register;


Route::get('/', function () {
    return view('welcome');
});

// check uniqueness of email address on the time of registration

Route::post('/checkEmail', [Register::class, 'uniqueEmail']);

// submitting form data to Laravel Server

Route::post('/register', [Register::class, 'formValidation']);

