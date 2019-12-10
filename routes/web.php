<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

Route::get('/', function () {
    return view('welcome');
});

Route::namespace('Api')->group(function () {
    Route::get('/user/index', 'UserController@index');
    Route::get('/user/login', 'UserController@login');
    Route::get('/user/home', 'UserController@home');
    Route::get('/user/register', 'UserController@register');
});

Route::namespace('Admin')->group(function () {
    Route::get('/admin/index', 'AdminController@index');
});
