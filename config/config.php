<?php
/**
 * Created by PhpStorm.
 * User: Txk
 * Date: 2018/7/29
 * Time: 15:45
 */
/*数据源配置*/
//升级内存
ini_set('memory_limit','512');
//设置每页显示信息数量
$num = 10;
//设置页面标题后缀
/*define('SITE_SUFFIX','php论坛_www.php.cn');*/

//设置数据库连接参数
$db = array(
    'db_host' => '127.0.0.1',
    'db_user' => 'root',
    'db_pass' => 'root',
    'db_name' => 'dbblog'
);
$article_name = 'biz_article';
//获取请求参数
$action = isset($_GET['a'])?$_GET["a"]:'list';
switch ($action){
    case 'list':
        include  'controller/listAction.php';break;
}