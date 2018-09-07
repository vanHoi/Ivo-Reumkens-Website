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

/* Routes */

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about', 'AboutController@serveAboutPage');

Route::get('/contact', function () {
	return view('pages.contact');
});

/* Dynamische projectpagina */

Route::get('/work/{projectName}', 'ProjectController@serveProjectPage');

/* Taal Controleren */

Route::get('locale', function () {
	return \App::getLocale();
});

/* Taal veranderen */

Route::get('locale/{locale}', function ($locale) {
	\Session::put('locale', $locale);
	return redirect()->back();
});