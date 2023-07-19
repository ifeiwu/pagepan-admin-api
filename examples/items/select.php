<?php
require_once '../../config.php';
require_once '../../helper.php';

$headers = ['token' => SITE_TOKEN];

$column = 'id,pid,title,image,path'; // 显示字段
$where = [['page_id', '=', 160], 'AND', ['type', '=', 1]]; // type=1表示项目，type=2表示分类
$order = ['sortby' => 'DESC', 'ctime' => 'DESC']; // 排序规则
$limit = [0, 2]; // 限制条数

// 查询分页
$res = adminApi(SITE_API_URL, 'item/select', ['column' => $column, 'where' => $where, 'order' => $order, 'limit' => $limit], $headers, 'post');

print_r($res);