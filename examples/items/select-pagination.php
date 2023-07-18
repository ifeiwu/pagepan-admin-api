<?php
require_once '../../config.php';
require_once '../../helper.php';

$headers = ['token' => SITE_TOKEN];

$column = '*'; // 显示字段
$where = [['page_id', '=', 160], 'AND', ['type', '=', 1]]; // type=1表示项目，type=2表示分类
$order = ['sortby' => 'DESC', 'ctime' => 'DESC']; // 排序规则
$perpage = 5; // 每页条数
$pagenum = 1; // 当前页码

// 查询分页
$res = adminApi(SITE_API_URL, 'item/select', ['column' => $column, 'where' => $where, 'order' => $order, 'perpage' => $perpage, 'pagenum' => $pagenum], $headers, 'post');

print_r($res);