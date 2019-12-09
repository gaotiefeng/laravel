<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
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
