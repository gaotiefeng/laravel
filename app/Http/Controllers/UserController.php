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

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        var_dump($request->getUri());
    }

    public function register()
    {
        echo 'register';
    }

    public function login()
    {
        echo 'login';
    }

    public function home()
    {
        echo 'home';
    }
}
