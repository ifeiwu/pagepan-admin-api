<?php
require_once '../../config.php';
require_once '../../helper.php';

$headers = ['token' => SITE_TOKEN];

$id = 1000292;

$params = [
    'page_id' => 160, // 页面id
    'pid' => 1000287, // 分类id
    'title' => '主标题2',
    'subtitle' => '副标题2',
    'image' => 'https://test.pagepan.com/02/data/file/item/10016/27.png',
    'state' => 1,
    'summary' => '摘要内容2',
    'content' => '详情内容2'
];

// 更新数据
$res = adminApi(SITE_API_URL, 'item/update/' . $id, $params, $headers, 'post');

print_r($res);