<?php
/**
 * Created by PhpStorm.
 * User: qiuyu
 * Date: 2018/9/7
 * Time: 5:42 PM
 */

namespace App\Services;

use App\Contracts\TestContract;

class TestService implements TestContract
{
    public function callMe($controller)
    {
        dd('Call Me From TestServiceProvider In ' . $controller);
    }
}
