<?php
/**
 * Created by PhpStorm.
 * User: Txk
 * Date: 2018/7/29
 * Time: 15:49
 */

function blog_load_tpl($tplName)
{
    global $bbsList;    //论坛帖子列表
    global $bbsListPage;//论坛帖子列表分页html
    global  $num;    //每也显示的条数
    global $bbsListHot; //论坛热门帖子列表
    global $bbsType;    //论坛帖子类型 1最新 2热门
    global $details;    //论坛帖子详情
    global $comment;    //论坛评论列表
    global $userList;   //论坛当前用户信息
    global $pUserList;  //论坛发帖人用户信息
    //自动加载模板
    include 'view/tpl/'.$tplName.'_tpl.php';
}
//连接数据库，使用频繁，每次调用数据，就会使用。
// TP3 查询语句写法。
// M('Forum_bbs')->field(true)->where(array('status'=>1))->find();
function db_connect($db)
{
    // 创建连接
    $conn  = new mysqli($db['db_host'], $db['db_user'], $db['db_pass'], $db['db_name']);

    // 检测连接
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    return $conn;
}
//获取总共的文章的条数
function allNum($db,$sql){
    $row=[];
    if($result=mysqli_query($db,$sql)){
        /**
         *函数从结果集中取得一行作为关联数组。
         * 返回根据从结果集取得的行生成的关联数组，如果没有更多行，则返回 false
         */
        $row = mysqli_fetch_assoc($result);
        /**
         * mysql_free_result() 函数释放结果内存。
         * 如果成功，则返回 true，如果失败，则返回 false。
         */
        mysqli_free_result($result);
    }
    /**
     * 关闭MySQL数据连接
     */
    unset($db);
    return $row;
}
/**
 * 分页查询
 */
function pabeDate($db,$table,$startNum,$endNum){
    $sql = 'select a.*,b.name from  '.$table .'  a left join biz_type b on a.type_id=b.id ORDER BY a.id  LIMIT ' . $startNum .','.$endNum;
    $rows=[];
    if($result=mysqli_query($db,$sql)){
        /**
         *函数从结果集中取得一行作为关联数组。
         * 返回根据从结果集取得的行生成的关联数组，如果没有更多行，则返回 false
         */
        /**
         *函数从结果集中取得一行作为关联数组。
         * 返回根据从结果集取得的行生成的关联数组，如果没有更多行，则返回 false
         */
        while($row = mysqli_fetch_assoc($result)){
            //将返回的行数组放入到待返回数组
            $rows[] = $row;
        }
        /**
         * mysql_free_result() 函数释放结果内存。
         * 如果成功，则返回 true，如果失败，则返回 false。
         */
        mysqli_free_result($result);
    }
    /**
     * 关闭MySQL数据连接
     */
    unset($db);
    return $rows;
}
/**
 * 根据SQL语句查询返回集合
 */
function getArrayBySQL($db,$sql){
    $rows=[];
    if($result=mysqli_query($db,$sql)){
        /**
         *函数从结果集中取得一行作为关联数组。
         * 返回根据从结果集取得的行生成的关联数组，如果没有更多行，则返回 false
         */
        /**
         *函数从结果集中取得一行作为关联数组。
         * 返回根据从结果集取得的行生成的关联数组，如果没有更多行，则返回 false
         */
        while($row = mysqli_fetch_assoc($result)){
            //将返回的行数组放入到待返回数组
            $rows[] = $row;
        }
        /**
         * mysql_free_result() 函数释放结果内存。
         * 如果成功，则返回 true，如果失败，则返回 false。
         */
        mysqli_free_result($result);
    }
    /**
     * 关闭MySQL数据连接
     */
    unset($db);
    return $rows;
}