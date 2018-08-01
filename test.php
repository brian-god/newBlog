<?php

include  'ptlfunction/function.php';
//设置数据库连接参数
$db = array(
    'db_host' => '127.0.0.1',
    'db_user' => 'root',
    'db_pass' => 'root',
    'db_name' => 'dbblog'
);
//获取数据库连接
$connect = db_connect($db);
/*$sql = 'select * from sys_template where id =9';

$template = getOneRowBySQL($connect,$sql);
var_dump($template);*/
//近期评论
$commentSQL='select  b.content,u.nickname,u.avatar  from  biz_comment b left join sys_user u  on b.user_id =u.id ORDER BY b.create_time desc LIMIT 0,10';
//获取评论
$commentArray = getArrayBySQL($connect,$commentSQL);
var_dump($commentArray);