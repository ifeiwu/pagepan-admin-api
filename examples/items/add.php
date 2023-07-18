<?php
require_once '../../config.php';
require_once '../../helper.php';

$headers = ['token' => SITE_TOKEN];

$params = [
    'page_id' => 160, // 页面id
    'pid' => 1000287, // 分类id
    'title' => '主标题',
    'subtitle' => '副标题',
    'image' => 'http://qing.pagepan.com.loc/src/data/file/freedom.jpg',
    'state' => 1,
    'summary' => '摘要内容',
    'content' => '详情内容'
];

// 添加数据
$res = adminApi(SITE_API_URL, 'item/add', $params, $headers, 'post');

print_r($res);