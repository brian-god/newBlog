<?php
/**
 * Created by PhpStorm.
 * User: Txk
 * Date: 2018/7/29
 * Time: 16:12
 */
//设置数据库连接参数
$db = array(
    'db_host' => '127.0.0.1',
    'db_user' => 'root',
    'db_pass' => 'root',
    'db_name' => 'dbblog'
);
$article_name = 'biz_article';
include 'ptlfunction/function.php';
$cont = db_connect($db);
$num = allNum($cont,$article_name)['num'];
var_dump($num);