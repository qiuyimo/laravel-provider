<?php

namespace App\Http\Controllers;

use App\Contracts\TestContract;
use Illuminate\Http\Request;

class TestController extends Controller
{
    protected $test;

    /**
     * 依赖注入
     * TestController constructor.
     * @param TestContract $test
     */
    public function __construct(TestContract $test)
    {
        $this->test = $test;
    }

    public function index()
    {
        $this->test->callMe(__CLASS__);
    }
}
