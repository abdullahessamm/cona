<?php

function set_lang() {
    if (auth()->user()) {
        App::setLocale(auth()->user()->lang);
    } else {
        if (session()->has('lang')) {
            App::setLocale(session()->get('lang'));
        } else {
            App::setLocale('en');
        }
    }
}

// Web routes...

// Main page Route
Route::get('/', function () {
    set_lang();
    if (auth()->user()):
        //return view('vue.Home');
    endif;
    return view('welcome');
})->middleware('guest');

//Select site language
Route::get('/lang/{lang?}', function ($lang = null) {
    $langs = ['en','ar'];
    if (in_array($lang, $langs)) {
        if (auth()->user()) {
            auth()->user()->lang = $lang;
            auth()->user()->save();
        } else {
            session()->put('lang', $lang);
        }
    } else {
        session()->put('lang', 'en');
    }
    return back();
});






//test
Route::post('/login', 'UserController@login');
Route::get('/logout', function () {
    auth()->logout();
});
Route::view('/vue', 'vue.Test')->middleware('user');
