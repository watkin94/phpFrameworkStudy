<?php

declare(strict_types=1);

namespace App\Controller;
use Hyperf\HttpServer\Annotation\AutoController;

#[AutoController]
class TestController extends AbstractController
{
    public function index()
    {
        return [
            'code'=>0,
            'msg'=>'success'
        ];
    }

    //测试控制器
    public function test()
    {
        return [
            'code'=>0,
            'msg'=>'success'
        ];
    }
}
