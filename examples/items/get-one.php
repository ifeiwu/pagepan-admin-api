<?php
require_once '../../config.php';
require_once '../../helper.php';

$headers = ['token' => SITE_TOKEN];

$id = 1000292;

// 获取一条数据
$res = adminApi(SITE_API_URL, 'item/one/' . $id, [], $headers, 'get');

print_r($res);