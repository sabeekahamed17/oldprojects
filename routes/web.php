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
    return view('subdomain');
});


// Route::get('/default', function () {
//     return view('pattern.pattern');
// });

Route::get('/pattern', function () {
    return view('pattern.pages.homepage');
});

Route::get('/candy', function () {
    return view('candy.pages.candypage');
});

Route::get('/mizuxe', function () {
    return view('miszuse.pages.pages');
});

Route::get('/glozzom', function () {
    return view('glozzam.pages.pages');
});

Route::get('/glozzom/about', function () {
    return view('glozzam.pages.aboutus');
});

Route::get('/glozzom/service', function () {
    return view('glozzam.pages.servicep');
});

Route::get('/glozzom/blog', function () {
    return view('glozzam.pages.blogp');
});

Route::get('/glozzom/contact', function () {
    return view('glozzam.pages.contactp');
});

Route::get('/webert', function () {
    return view('webert.pages.pages');
});

Route::get('/wood', function () {
    return view('wood.pages.pages');
});

Route::get('/medilab', function () {
    return view('medilab.pages.pages');
});

Route::get('/sample', function () {
    return view('folder.pages.pages');
});

Route::get('/day', function () {
    return view('day.pages.pages');
});

Route::get('/natours', function () {
    return view('natours.pages.pages');
});

Route::get('/trillo', function () {
    return view('trillo.pages.pages');
});

Route::get('/nexter', function () {
    return view('nexter.pages.pages');
});

Route::get('/jasper', function () {
    return view('jasper.pages.pages');
});



