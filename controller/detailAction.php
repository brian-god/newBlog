<?php
/**
 * Created by PhpStorm.
 * User: txk
 * Date: 2018/7/30
 * Time: 23:33
 */
//加载的公共文件
include  'ptlfunction/function.php';
//设置加载的模板名称
$tpl_Name = 'detail';
//获取数据库连接
$connect = db_connect($db);
//组装界面所需要的数据
$bbsList=[];
//查询顶部的按钮菜单
$top_menuSQL = 'select id,name,sort,icon,available from biz_type ORDER BY sort ';
//获取文章类型菜单
$Top_menus = getArrayBySQL($connect,$top_menuSQL);
//向集合中放入菜单的集合
$bbsList['$Top_menus'] =$Top_menus;