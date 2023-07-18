<?php
require_once '../../config.php';
require_once '../../helper.php';

$ids = [1000316];

$headers = ['token' => SITE_TOKEN];

// 删除数据
$res = adminApi(SITE_API_URL, 'item/delete', ['ids' => $ids], $headers, 'post');

print_r($res);