<?php

use App\Http\Controllers\front_page\LandingController;
use Illuminate\Support\Facades\Route;

$controller_path = 'App\Http\Controllers';

// Main Page
Route::get('/', $controller_path . '\front_page\LandingController@index');
Route::get('/login', $controller_path . '\front_page\LandingController@login');
Route::get('/register-account', $controller_path . '\front_page\LandingController@register_account');
Route::get('/register-workspace', $controller_path . '\front_page\LandingController@register_workspace');
