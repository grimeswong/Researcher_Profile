<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('main');
});

Route::post('add_profile_action', function () {
    $firstname = request('firstName');
    $lastname = request('lastName');
    $position = request('position');
    $email = request('email');
    $biography = request('biography');
    $image = request('image');
    // dd($image);   //debugger

    return view('profile')->with('firstname', $firstname)->with('lastname', $lastname)->with('position', $position)->with('email', $email)->with('biography', $biography)->with('image', $image);
});
