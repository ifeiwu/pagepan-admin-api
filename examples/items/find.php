<?php
require_once '../../config.php';
require_once '../../helper.php';

$headers = ['token' => SITE_TOKEN];

$id = 1000292;
$columns = 'id,pid,page_id,title,image,path,content';

// 获取一条数据
$res = adminApi(SITE_API_URL, 'item/find/' . $id . '/' . $columns, [], $headers, 'get');

print_r($res);