<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace App\Http\Controllers;

use App\Constant\constant;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests;
    use DispatchesJobs;
    use ValidatesRequests;

    public function success($data, $message, $code = 0)
    {
        $result['code'] = constant::SUCCESS;
        $result['message'] = $message;
        $result['data'] = $data;
        return response()->json($result);
    }

    public function error($data, $message, $code)
    {
        $result['code'] = constant::ERROR;
        $result['message'] = $message;
        $result['data'] = $data;
        return response()->json($result);
    }
}
