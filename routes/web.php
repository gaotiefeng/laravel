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
Route::get('/user', 'UserController@index');
Route::get('/login', 'UserController@login');
Route::get('/home', 'UserController@home');
Route::get('/register', 'UserController@register');

Route::namespace('Admin')->group(function () {
    Route::get('/admin/index', 'AdminController@index');
});
