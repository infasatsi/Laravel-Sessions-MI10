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

Route::get('/', function () {
    return view('welcome');
});


//Set a session value
Route::get('/set-session', function () {
    session(['name' => 'John']);
    return 'Session variable is set!';
});


//Get the session value
Route::get('/get-session', function () {
    $name = session('name');
    if($name){
        return 'Session variable value: ' . $name;
    }

    return 'The session is empty!';
});

//Clear the session value
Route::get('/clear-session', function () {
    session()->forget('name');
    return 'Session variable cleared';
});
