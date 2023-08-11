<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace App\Controller;
use Hyperf\HttpServer\Annotation\AutoController;


#[AutoController]
class UserController extends AbstractController
{
    public function index()
    {
        $user = $this->request->input('user', 'Hyperf22');
        $method = $this->request->getMethod();

        return [
            'method' => $method,
            'message' => "Hello {$user}.",
        ];
    }


    public function user()
    {
        $message = $this->request->input('user','watkin1994');
        return [
            'code'=>0,
            'message'=>$message
        ];
    }
}
