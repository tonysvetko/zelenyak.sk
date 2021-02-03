<?php

Debugbar::disable();

Route::get('/', 'PagesController@home')->name('home');

Route::get(LaravelLocalization::transRoute('routes.register'), 'PagesController@register')->name('register');
Route::post('/register', 'PagesController@postRegister')->name('post.register');

Route::get(LaravelLocalization::transRoute('routes.proposition'), 'PagesController@proposition')->name('proposition');
Route::get(LaravelLocalization::transRoute('routes.contact'), 'PagesController@contact')->name('contact');
Route::get(LaravelLocalization::transRoute('routes.gallery'), 'PagesController@gallery')->name('gallery');

Route::get('/gdpr', 'PagesController@gdpr')->name('gdpr');
