<?php
header('Content-Type: application/json');

// 数据源【增删改】操作接收数据，请到网站后台对应的数据源【基本信息 -> Webhook】填写当前文件访问的链接。
$json = file_get_contents("php://input");

$res = json_decode($json, true);

file_put_contents('debug.log', print_r($res, true), FILE_APPEND);

echo 'success';