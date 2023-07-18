<?php
require_once '../../config.php';
require_once '../../helper.php';

$headers = ['token' => SITE_TOKEN];

$sql = 'SELECT * FROM pagepan_item WHERE page_id = ? AND type = ?'; // type=1表示项目，type=2表示分类
$values = [160, 1];

// 预处理查询
$res = adminApi(SITE_API_URL, 'item/query', ['sql' => $sql, 'values' => $values], $headers, 'post');

print_r($res);