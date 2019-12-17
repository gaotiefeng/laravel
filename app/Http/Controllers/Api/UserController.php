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
use App\Http\Services\Dao\UserDao;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $dao;

    public function __construct(UserDao $userDao)
    {
        $this->dao = $userDao;
    }

    public function index(Request $request)
    {
        $data['code'] = 0;
        $data['request'] = request()->all();
        $result = $this->dao->list();
        $data['items'] = $result;

        return response()->json($data);
    }

    public function register()
    {
        $input = request()->all();
        $name = request()->input('name');

        $result = $this->dao->save($input);

        return response()->json($result);
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
