<?php

//创建WebSocket Server对象，监听0.0.0.0:9502端口。
$ws = new Swoole\WebSocket\Server('0.0.0.0', 9502);

//用fdArr数组存放用户客户端的链接
$fdArr = [];
//监听WebSocket连接打开事件。
$ws->on('Open', function ($ws, $request) use (&$fdArr) {
    $fdArr[$request->fd] = $request->fd;
    $data = ['type'=>'connect','data'=>$request->fd];
    $ws->push($request->fd,json_encode($data));
});

//监听WebSocket消息事件。
$ws->on('Message', function ($ws, $frame) {
    echo "Message: {$frame->data}\n";       //前端提交的信息格式是JSON，要做相应的转化
    $data = json_decode($frame->data,true);
    $data_json = ['type'=>'msg','data'=>$data['msg']];
    $ws->push($data['fd'], json_encode($data_json));
});

//监听WebSocket连接关闭事件。
$ws->on('Close', function ($ws, $fd) use (&$fdArr) {
    unset($fdArr[$fd]);
    echo "client-{$fd} is closed\n";
});

$ws->start();
