<?php
require __DIR__.'/isa.php';
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
