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

Route::get('/', function () {
    return view('home');
});

Route::get('/event', function () {
    return view('eventPage');
});

Route::get('/Linux', function () {
    return view('Linux');
});

Route::get('/committeeName', function () {
    return view('committees');
});

Route::get('/linuxWorkshop', function () {
    return view('linuxWorkshop');
});
Route::get('/laravelWorkshop', function () {
    return view('laravelWorkshop');
});
Route::get('/blenderWorkshop', function () {
    return view('blenderWorkshop');
});
Route::get('/Recruitment', function () {
    return view('RecruitmentForm');
});