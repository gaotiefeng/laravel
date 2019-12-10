<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $data['code'] = 0;
        $data['items'] = $request->all() ?? [];
        $data['request'] = request()->all();

        return response()->json($data);
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
