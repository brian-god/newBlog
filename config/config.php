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
//设置TITLE
$title ='唐晓康博客 | 一个程序员的个人博客';
//博主名称
$blog_name = '唐晓康博客';
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
$article_id = isset($_GET['id'])?$_GET["id"]:0;
//需要加载的action
$actionName = isset($_GET['type'])?$_GET["type"]:'list';
var_dump($actionName);
var_dump($article_id);
switch ($actionName){
    case 'list':
        //加载展示的action
        include 'controller/listAction.php';break;
    case 'detail':
        echo $actionName;
        //加载细节展示的action
        include 'controller/detailAction.php';break;
}
//请求执行
/*$bbsList =requestFUN($db,$article_id,$article_name,$num);*/
