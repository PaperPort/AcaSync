<?php

use App\Http\Controllers\front_page\WelcomeController;
use Illuminate\Support\Facades\Route;

$controller_path = 'App\Http\Controllers';

// Main Page
Route::get('/', $controller_path . '\front_page\WelcomeController@index');
Route::get('/login', $controller_path . '\front_page\WelcomeController@login');
Route::get('/register-account', $controller_path . '\front_page\WelcomeController@register_account');
Route::get('/register-workspace', $controller_path . '\front_page\WelcomeController@register_workspace');
Route::get('/forgot-password', $controller_path . '\front_page\WelcomeController@forgot_password');
Route::get('/change-password', $controller_path . '\front_page\WelcomeController@change_password');


// Personal Page : Guru, Orang Tua, Murid
Route::get('/personal-landing', $controller_path . '\user_page\UserController@landing');
Route::get('/personal-profile', $controller_path . '\user_page\UserController@profile');
Route::get('/join-workspace', $controller_path . '\workspace\WorkspaceController@join');
Route::get('/join-workspace/code', $controller_path . '\workspace\WorkspaceController@join_code');