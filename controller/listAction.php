<?php
/**
 * Created by PhpStorm.
 * User: Txk
 * Date: 2018/7/29
 * Time: 15:56
 */
//设置需要加载的模板名称
include  'ptlfunction/function.php';
//设置加载的模板名称
$tpl_Name = 'list';
//组装界面所需要的数据
$bbsList=[];
//是否显示轮播图
$isShowImg = true;
//获取数据库连接
$connect = db_connect($db);
//查询总条数的SQL
$numSql = 'select COUNT(1) num from   '.$article_name;
if($article_id !=0){
    $numSql =$numSql .'where type_id='.$article_id;
    //如果不是首页则不显示轮播图
    $isShowImg = false;
}
/*解决 PHP Notice: undefined index 完美解决方法*/
//查询文章的总条数
$articleNumArray = allNum($connect,$numSql);
//获取总数
$articleNum = !empty($articleNumArray['name']) ? $articleNumArray['name'] : 0;
/*end*/
//在集合中添加文章总条数
$bbsList['articleNum']= $articleNum;
//获取当前页数默认为一
$page = isset($_GET['data-page'])?$_GET['data-page']:1;
//计算起始位置
$startNum = ($page-1)* $num;
//结束的位置
$endNum = $page*$num;
//分页数据
/*$page_Data = pabeDate($connect,$article_name,$startNum,$endNum);*/
//查询文章根据文章类型
$articSql = 'select a.*,b.name from  '.$article_name .'  a left join biz_type b on a.type_id=b.id ';
//判断需要查询的文章类型
if($article_id !=0){
    $articSql = $articSql .' where a.type_id ='.$article_id;
}
$articSql = $articSql . ' ORDER BY a.id  LIMIT ' . $startNum .','.$endNum;
//获取文章数据
$page_Data = getArrayBySQL($connect,$articSql);
//将分页数据放入到数据集合中
$bbsList['page_Data'] =$page_Data;
//计算总页数
$pageAll = ($articleNum  +  $num  - 1) / $num;
//总页数
$bbsList['pageAll'] = $pageAll;
//查询标签的SQL语句
$tags_sql ='select name from biz_tags ORDER BY id';
//获取文章标签
$tagsData = getArrayBySQL($connect,$tags_sql);
//将文章的集合放入到集合中
$bbsList['$tagsData'] = $tagsData;
//查询顶部的按钮菜单
$top_menuSQL = 'select id,name,sort,icon,available from biz_type ORDER BY sort ';
//获取文章类型菜单
$Top_menus = getArrayBySQL($connect,$top_menuSQL);
//向集合中放入菜单的集合
$bbsList['$Top_menus'] =$Top_menus;
//是否显示轮播图
$bbsList['isShowImg'] =$isShowImg;
