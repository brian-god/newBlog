<?php
/**
 * Created by PhpStorm.
 * User: Txk
 * Date: 2018/7/29
 * Time: 15:56
 */
//设置需要加载的模板名称
include  'ptlfunction/function.php';
//设置每页显示信息数量
$num = 10;
//设置加载的模板名称
$tpl_Name = 'list';
//组装界面所需要的数据
$bbsList=[];
//获取数据库连接
$connect = db_connect($db);
//查询文章的总条数
$articleNum = allNum($connect,$article_name)['count(1)'];
//在集合中添加文章总条数
$bbsList['articleNum']= $articleNum;
//获取当前页数默认为一
$page = isset($_GET['data-page'])?$_GET['data-page']:1;
//计算起始位置
$startNum = ($page-1)* $num;
//结束的位置
$endNum = $page*$num;
//分页数据
$page_Data = pabeDate($connect,$article_name,$startNum,$endNum);
//将分页数据放入到数据集合中
$bbsList['page_Data'] =$page_Data;
//总共的页数
$allNum = ($articleNum+$num-1)/$num;
//将总页数放入集合中
$bbsList['allPage'] = $allNum;
