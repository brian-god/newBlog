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
//查询文章
$articSql = 'select a.*,b.name,b.id type_id from  '.$article_name .'  a left join biz_type b on a.type_id=b.id  '. 'where a.id='.$article_id;
//获取文章数据
$page_Data = getArrayBySQL($connect,$articSql);
//将文章放入到集合中
$bbsList['page_Data'] =$page_Data;