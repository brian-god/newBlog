<!DOCTYPE html>
<html lang="zh-CN" class="">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="baidu-site-verification" content="d4kcdwiGHw">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php echo  $title?></title>
    <meta name="author" content="张亚东(yadong.zhang0415#gmail.com)">
    <meta name="keywords" content="张亚东博客,程序猿,程序员,后端开发,软件开发,WEB开发,Java攻城狮,全栈工程师,原创博客,个人原创网站,个人技术博客">
    <meta name="description" content="张亚东博客是一个程序员的个人技术博客(微博ID:@七彩狼丿)，旨在分享工作和学习中用到的技术、遇到的疑难知识点，也为了备战自己的人生。心之所向，无所不能。" id="meta_description">
    <link rel="canonical" href="https://www.zhyd.me/">
    <link href="static/img/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <!--图标样式-->
    <link rel="stylesheet" type="text/css" href="static/font-awesome/css/font-awesome.css" />
    <link href="static/txk/css/bootstrap.min.css" rel="stylesheet">
    <!--引入tooltip-->
    <link href="static/tooltip/tooltip.css" rel="stylesheet">
    <link href="static/txk/css/jquery-confirm.min.css" rel="stylesheet">
    <link href="static/txk/css/jquery.fancybox.min.css" rel="stylesheet">
    <link href="static/txk/css/bootstrapValidator.min.css" rel="stylesheet">
    <link href="static/css/zhyd.core.css" rel="stylesheet" type="text/css">
    <link href="static/css/zhyd.comment.css" rel="stylesheet" type="text/css">
</head>

<body>
<nav id="topmenu" class="navbar navbar-default navbar-fixed-top" style="opacity: 1;">
    <div class="menu-box">
        <div class="pull-left">
            <ul class="list-unstyled list-inline">
                <li><span id="timeShow"></span></li>
            </ul>
            <div class="clear"></div>
        </div>
        <div class="menu-topmenu-container pull-right">
            <ul class="list-unstyled list-inline pull-left">
                <li>
                    <a href="about.html" class="menu_a" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="关于博客"><i class="fa fa-info fa-fw"></i>关于</a>
                </li>
                <li>
                    <a href="links.html" class="menu_a" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="友情链接"><i class="fa fa-link fa-fw"></i>友情链接</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<nav id="mainmenu" class="navbar navbar-default navbar-fixed-top" role="navigation" style="top: 30px; z-index: 998;">
    <div class="menu-box">
        <div class="navbar-header">
            <span class="pull-right nav-search toggle-search" data-toggle="modal" data-target=".nav-search-box"><i class="fa fa-search"></i></span>
            <a type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="true" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="navbar-brand logo" href="http://47.98.164.175/#"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse in" aria-expanded="true" style="">
            <div class="pull-left site-desc" style="line-height: 0.9;">
                <h1 style="font-size: 20px;font-weight: 700;" class="auto-shake"><a href="http://www.luxiaosong.top/" data-original-title="写博客、记日志、闲聊扯淡鼓捣技术" data-toggle="tooltip" data-placement="bottom"><?php echo $blog_name?></a></h1>
                <p class="site-description">写博客、记日志、闲聊扯淡鼓捣技术</p>
            </div>
            <ul class="nav navbar-nav ">
                <li class="active">
                    <a href="/" class="menu_a"><i class="fa fa-home"></i>首页</a>
                </li>
                <?php foreach ($bbsList['$Top_menus'] as $topMenu){ ?>
                <li >
                    <a href="?id=<?php  echo $topMenu['id'] ?>" class="menu_a"><i class="fa <?php echo $topMenu['icon'] ?> fa-fw"></i><?php echo $topMenu['name']?></a>
                </li>
                <?php  }?>
                <li><span class="pull-right nav-search main-search" data-toggle="modal" data-target=".nav-search-box"><i class="fa fa-search"></i></span></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container custome-container">
    <!--[if lt IE 9]><div class="alert alert-danger topframe" role="alert">Oh My God！你的浏览器实在<strong>太太太太太太旧了</strong>，赶紧升级浏览器 <a target="_blank" class="alert-link" href="http://browsehappy.com">立即升级</a></div><![endif]-->
    <?php
    $tplname =!empty($bbsList['tpl_Name']) ? $bbsList['tpl_Name'] : '';
    //判断只有在list展示界面中显示提示消息
    $display = 'none';
    if($tplname == 'list'){
        //若为首页则显示
        $display ='visible';
    }?>
    <nav class="breadcrumb" style="display:<?php echo $display?>;" >
        <div class="notify"><i class="fa fa-volume-up"></i></div>
        <div id="scrolldiv">
            <div class="scrolltext">
                <ul class="list-unstyled" style="margin-top: 0px;">

                    <li class="scrolltext-title">
                        <a href="javascript:void(0)" rel="bookmark">本站正式启用新域名:</a>
                        <a href="https://www.zhyd.me/www.zhyd.me" target="_blank"><strong>https:/www.zhyd.me</strong></a>
                    </li>
                    <li class="scrolltext-title">
                        <a href="javascript:void(0)" rel="bookmark">活了二十多年，没能为祖国、为人民做点什么，每思及此，伤心欲绝。</a>
                    </li>
                    <li class="scrolltext-title">
                        <a href="javascript:void(0)" rel="bookmark">其实我们可以将所有的问题归结为两种：一种是没饭吃饿出来的；一种是吃饱了撑出来的。</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>