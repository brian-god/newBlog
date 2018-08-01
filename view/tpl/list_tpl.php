<div class="row">
    <div class="col-sm-8 blog-main">
        <?php if($bbsList['isShowImg']) { ?>
            <div class="blog-body expansion" style="padding: 0;">
                <div id="myCarousel" class="carousel slide" style="height:300px;">
                    <!-- 轮播（Carousel）指标 -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                    </ol>
                    <!-- 轮播（Carousel）项目 -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <a href="http://www.luxiaosong.top//article/3">
                                <img src="static/img/carousel/carousel2.jpg" alt="JSP使用JSTL进行日期比较"
                                     title="JSP使用JSTL进行日期比较">
                            </a>
                            <div class="zyd-carousel-caption">JSP使用JSTL进行日期比较</div>
                        </div>
                        <div class="item ">
                            <a href="http://www.luxiaosong.top//article/6">
                                <img src="static/img/carousel/carousel1.jpg" alt="linux下利用nohup后台运行jar文件包程序"
                                     title="linux下利用nohup后台运行jar文件包程序">
                            </a>
                            <div class="zyd-carousel-caption">linux下利用nohup后台运行jar文件包程序</div>
                        </div>
                        <div class="item ">
                            <a href="http://www.luxiaosong.top//article/4">
                                <img src="static/img/carousel/carousel3.jpg" alt="翻墙软件免费用" title="翻墙软件免费用">
                            </a>
                            <div class="zyd-carousel-caption">翻墙软件免费用</div>
                        </div>
                    </div>
                    <!-- 轮播（Carousel）导航 -->
                    <a class="left carousel-control" href="http://47.98.164.175/#myCarousel" role="button"
                       data-slide="prev">
                        <span class="fa fa-angle-left fa-fw fa-3x" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="http://47.98.164.175/#myCarousel" role="button"
                       data-slide="next">
                        <span class="fa fa-angle-right fa-fw fa-3x" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        <?php
        }
        foreach ($bbsList['page_Data'] as $article){?>
        <article class="fade-in">
            <figure class="thumbnail">
                <a href="/?type=detail&id=<?php echo $article['id'] ?>">
                    <img width="150" height="150" data-original="http://p4c3z3uxb.bkt.clouddn.com/flyat%2Fcover%2F1516792670965.png-img_150x150" class="img-responsive lazy-img" alt="Cordova入门（一）创建android项目" src="http://p4c3z3uxb.bkt.clouddn.com/flyat%2Fcover%2F1516792670965.png-img_150x150" style="display: block;">
                </a>
                <span class="cat"><a href="https://www.zhyd.me/type/2"><?php echo $article['name']?></a></span>
            </figure>
            <header class="entry-header">
                <!--//获取标题-->
                <h2 class="entry-title">
                    <a href="/?type=detail&id=<?php echo $article['id'] ?>" rel="bookmark" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="点击查看文章详情"><?php echo $article['title']?></a>
                </h2>
            </header>
            <div class="entry-content">
                <div class="archive-content">
                   <?php echo $article['description']?>
                </div>
                <span class="title-l"></span>
                <span class="entry-meta">
								<span class="date" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="文章发表日期"><i class="fa fa-calendar-o fa-fw"></i><?php echo  $article['create_time']?></span>
								<span class="views" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="文章阅读次数"><i class="fa fa-eye fa-fw"></i>浏览(88)</span>
								<span class="comment" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="文章评论次数">
									<a href="detail.html#comment-box" rel="external nofollow">
										<i class="fa fa-comments-o fa-fw"></i>评论(0)
									</a>
								</span>
							</span>
                <div class="clear"></div>
                <span class="entry-more">
								<a href="/?type=detail&id=<?php echo $article['id'] ?>" rel="bookmark" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="点击查看文章详情">阅读全文</a>
							</span>
            </div>
        </article>
        <?php }?>
        <nav>
            <ul class="pager page-btn" data-url="https://www.zhyd.me/index" data-search="false">
                <?php if($bbsList['articleNum']>$num){?>
                <li>
                    <a class="pointer active">1</a>
                </li>
                <?php } for($i=1;$i<$bbsList['pageAll'];$i++){?>
                <li>
                    <a class="pointer" data-page="<?php echo $i+1 ?>"><?php echo $i+1 ?></a>
                </li>
                <?php }
                if($bbsList['pageAll']>10){  ?>
                <li>
                    <a class="pointer" data-page="2"><i class="fa fa-angle-double-right"></i></a>
                </li>
                <?php }?>
            </ul>
        </nav>
    </div>
    <div class="col-sm-3 blog-sidebar">
        <div class="sidebar-module">
            <h5 class="sidebar-title"><i class="fa fa-home icon"></i><strong>关于我</strong></h5>
            <div class="widget">
                <div id="feed_widget">
                    <div class="feed-about">
                        <div class="about-main">
                            <div class="about-img">
                                <a href="static/img/WeChatpublicnumber.jpg" class="showImage" title="微信公众号"><img src="static/img/WeChatpublicnumber.jpg" alt="微信公众号"></a>
                            </div>
                            <div class="about-name"><?php echo $blog_name?></div>
                            <div class="about-the">一个程序员的个人博客，心之所向，无所不能</div>
                        </div>
                        <div class="clear"></div>
                        <!-- 方案一：图标展示 -->
                        <ul class="widget-icon">
                            <li class="weixin auto-shake" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-html="true" data-content="&lt;img src='static/img/wx.jpg' style='width: 130px;' alt='QR Code'&gt;" data-original-title="" title="">
                                <a class="tag-icon" title="微信" rel="external nofollow"><i class="fa fa-weixin"></i></a>
                            </li>
                            <li class="tqq auto-shake">
                                <a class="tag-icon" href="javascript:window.open('tencent://message/?uin=843977358&amp;Site=www.zhyd.me&amp;Menu=yes')" title="点击QQ联系我" target="blank" rel="external nofollow"><i class="fa fa-qq"></i></a>
                            </li>
                            <li class="tsina auto-shake">
                                <a class="tag-icon" href="http://weibo.com/211230415" title="点击查看我的微博" target="_blank" rel="external nofollow"><i class="fa fa-weibo"></i></a>
                            </li>
                            <li class="github auto-shake">
                                <a class="tag-icon" href="https://github.com/zhangyd-c" title="点击查看我的github" target="_blank" rel="external nofollow"><i class="fa fa-github"></i></a>
                            </li>
                        </ul>
                        <!-- 方案二：列表展示 -->
                        <!--<ul class="list-unstyled">
                            <li><i class="fa fa-info-circle fa-fw"></i>博主：<small>张亚东</small></li>
                            <li><i class="fa fa-user-circle fa-fw"></i>职业：<small>码农</small></li>
                            <li><i class="fa fa-home fa-fw"></i>籍贯：<small>长白山某棵树上</small></li>
                            <li><i class="fa fa-envelope-square fa-fw"></i>邮箱：<small>10000@qq.com</small></li>
                        </ul>-->
                    </div>
                </div>
            </div>
        </div>
        <div class="sidebar-module">
            <h5 class="sidebar-title"><i class="fa fa-thumbs-o-up icon"></i><strong>站长推荐优惠活动，领优惠券啦~~</strong></h5>
            <a href="https://promotion.aliyun.com/ntms/act/ambassador/sharetouser.html?userCode=wylo59db&amp;utm_source=wylo59db" target="_blank" rel="external nofollow">
                <img src="" alt="阿里云首购8折" style="margin: 0 auto;" class="img-responsive">
            </a>
        </div>
        <div class="sidebar-module article-module hide" style="top: 0;">
            <h5 class="sidebar-title"><i class="fa fa-book icon"></i><strong>本文目录</strong> <i class="fa fa-close pull-right close-article-menu hide pointer"></i></h5>
            <div id="article-menu">
                <ul class="list-unstyled">
                </ul>
            </div>
        </div>
        <div class="sidebar-module">
            <h5 class="sidebar-title"><i class="fa fa-tags icon"></i><strong>文章标签</strong></h5>
            <ul class="list-unstyled list-inline">
                <?php  foreach ($bbsList['$tagsData'] as $tags){?>
                <li class="tag-li">
                    <a class="btn btn-default btn-xs" href="https://www.zhyd.me/tag/1" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Linux">
                        <?php echo $tags['name']?>
                    </a>
                </li>
                <?php }?>
            </ul>
        </div>
        <div class="sidebar-module">
            <h5 class="sidebar-title"><i class="fa fa-comments icon"></i><strong>近期评论</strong></h5>
            <!--<ul class="list-unstyled list-inline comments">
                <li>
                    <a href="detail.html#comment-58" title="" rel="external nofollow" data-toggle="tooltip" data-placement="bottom" data-original-title="可以">
                        <img alt="骑着蜗牛追法拉利" src="./img/user.png" class="avatar auto-shake" height="64" width="64" onerror="this.src='./img/user.png'">
                        <span class="comment-author">骑着蜗牛追法拉利</span> 可以
                    </a>
                </li>
                <li>
                    <a href="detail.html#comment-57" title="" rel="external nofollow" data-toggle="tooltip" data-placement="bottom" data-original-title="​x">
                        <img alt="一块乐" src="./img/user.png" class="avatar auto-shake" height="64" width="64" onerror="this.src='./img/user.png'">
                        <span class="comment-author">一块乐</span> ​x
                    </a>
                </li>
                <li>
                    <a href="https://www.zhyd.me/guestbook#comment-51" title="" rel="external nofollow" data-toggle="tooltip" data-placement="bottom" data-original-title="OK了">
                        <img alt="超级管理员" src="./img/user.png" class="avatar auto-shake" height="64" width="64" onerror="this.src='./img/user.png'">
                        <span class="comment-author">超级管理员</span> OK了
                    </a>
                </li>
                <li>
                    <a href="https://www.zhyd.me/guestbook#comment-48" title="" rel="external nofollow" data-toggle="tooltip" data-placement="bottom" data-original-title="您好，我的网站：陈双义博客，更...">
                        <img alt="陈双义博客" src="./img/user.png" class="avatar auto-shake" height="64" width="64" onerror="this.src='./img/user.png'">
                        <span class="comment-author">陈双义博客</span> 您好，我的网站：陈双义博客，更...
                    </a>
                </li>
                <li>
                    <a href="detail.html#comment-47" title="" rel="external nofollow" data-toggle="tooltip" data-placement="bottom" data-original-title="没有哇！没啥影响的，欢迎来学习...">
                        <img alt="超级管理员" src="./img/user.png" class="avatar auto-shake" height="64" width="64" onerror="this.src='./img/user.png'">
                        <span class="comment-author">超级管理员</span> 没有哇！没啥影响的，欢迎来学习...
                    </a>
                </li>
                <li>
                    <a href="detail.html#comment-46" title="" rel="external nofollow" data-toggle="tooltip" data-placement="bottom" data-original-title="博客很好看">
                        <img alt="匿名" src="./img/user.png" class="avatar auto-shake" height="64" width="64" onerror="this.src='./img/user.png'">
                        <span class="comment-author">匿名</span> 博客很好看
                    </a>
                </li>
                <li>
                    <a href="https://www.zhyd.me/guestbook#comment-45" title="" rel="external nofollow" data-toggle="tooltip" data-placement="bottom" data-original-title="System.out.prin...">
                        <img alt="xsy" src="./img/user.png" class="avatar auto-shake" height="64" width="64" onerror="this.src='./img/user.png'">
                        <span class="comment-author">xsy</span> System.out.prin...
                    </a>
                </li>
                <li>
                    <a href="detail.html#comment-44" title="" rel="external nofollow" data-toggle="tooltip" data-placement="bottom" data-original-title="是我啊！说来也惭愧，学.net...">
                        <img alt="Harrison  " src="./img/user.png" class="avatar auto-shake" height="64" width="64" onerror="this.src='./img/user.png'">
                        <span class="comment-author">Harrison </span> 是我啊！说来也惭愧，学.net...
                    </a>
                </li>
                <li>
                    <a href="detail.html#comment-43" title="" rel="external nofollow" data-toggle="tooltip" data-placement="bottom" data-original-title="40GSSD硬盘啊。">
                        <img alt="超级管理员" src="./img/user.png" class="avatar auto-shake" height="64" width="64" onerror="this.src='./img/user.png'">
                        <span class="comment-author">超级管理员</span> 40GSSD硬盘啊。
                    </a>
                </li>
                <li>
                    <a href="detail.html#comment-42" title="" rel="external nofollow" data-toggle="tooltip" data-placement="bottom" data-original-title="空间有多大？">
                        <img alt="兽性大发" src="./img/user.png" class="avatar auto-shake" height="64" width="64" onerror="this.src='./img/user.png'">
                        <span class="comment-author">兽性大发</span> 空间有多大？
                    </a>
                </li>
            </ul>-->
        </div>
        <div class="sidebar-module">
            <ul class="nav nav-tabs sidebar-tabs" role="tablist">
                <li role="presentation" class="active">
                    <a href="https://www.zhyd.me/#home" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-thumbs-o-up"></i>站长推荐</a>
                </li>
                <li role="presentation">
                    <a href="https://www.zhyd.me/#profile" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-list"></i>近期文章</a>
                </li>
                <li role="presentation">
                    <a href="https://www.zhyd.me/#messages" aria-controls="messages" role="tab" data-toggle="tab"><i class="fa fa-hand-peace-o"></i>随机文章</a>
                </li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="home">
                    <ol class="list-unstyled">
                        <li>
                            <span class="li-icon li-icon-1">1</span>
                            <a href="detail.html" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Cordova入门（一）创建android项目">
                                Cordova入门（一）创建android项目
                            </a>
                        </li>
                        <li>
                            <span class="li-icon li-icon-2">2</span>
                            <a href="detail.html" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="【漏洞公告】Spring Framework多个安全漏洞预警">
                                【漏洞公告】Spring Framework多个安全漏洞预警
                            </a>
                        </li>
                        <li>
                            <span class="li-icon li-icon-3">3</span>
                            <a href="detail.html" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="快来薅羊毛！1核 2G1M宽带40GSSD硬盘才99元一年！">
                                快来薅羊毛！1核 2G1M宽带40GSSD硬盘才99元一年！
                            </a>
                        </li>
                        <li>
                            <span class="li-icon li-icon-4">4</span>
                            <a href="detail.html" title="" data-toggle="tooltip" data-placement="bottom" data-original-title=" zTree实现拖拽节点进行排序的功能">
                                zTree实现拖拽节点进行排序的功能
                            </a>
                        </li>
                        <li>
                            <span class="li-icon li-icon-5">5</span>
                            <a href="detail.html" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="配置MySQL开启远程连接的方法">
                                配置MySQL开启远程连接的方法
                            </a>
                        </li>
                        <li>
                            <span class="li-icon li-icon-6">6</span>
                            <a href="detail.html" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="记一次优化网站首页加载速度的过程">
                                记一次优化网站首页加载速度的过程
                            </a>
                        </li>
                        <li>
                            <span class="li-icon li-icon-7">7</span>
                            <a href="detail.html" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="【超全】开发常用工具">
                                【超全】开发常用工具
                            </a>
                        </li>
                    </ol>
                </div>
                <div role="tabpanel" class="tab-pane" id="profile">
                    <ol class="list-unstyled">
                        <li>
                            <span class="li-icon li-icon-1">1</span>
                            <a href="detail.html" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Cordova入门（一）创建android项目">
                                Cordova入门（一）创建android项目
                            </a>
                        </li>
                        <li>
                            <span class="li-icon li-icon-2">2</span>
                            <a href="detail.html" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="【漏洞公告】Spring Framework多个安全漏洞预警">
                                【漏洞公告】Spring Framework多个安全漏洞预警
                            </a>
                        </li>
                        <li>
                            <span class="li-icon li-icon-3">3</span>
                            <a href="detail.html" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="快来薅羊毛！1核 2G1M宽带40GSSD硬盘才99元一年！">
                                快来薅羊毛！1核 2G1M宽带40GSSD硬盘才99元一年！
                            </a>
                        </li>
                        <li>
                            <span class="li-icon li-icon-4">4</span>
                            <a href="detail.html" title="" data-toggle="tooltip" data-placement="bottom" data-original-title=" zTree实现拖拽节点进行排序的功能">
                                zTree实现拖拽节点进行排序的功能
                            </a>
                        </li>
                        <li>
                            <span class="li-icon li-icon-5">5</span>
                            <a href="detail.html" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="配置MySQL开启远程连接的方法">
                                配置MySQL开启远程连接的方法
                            </a>
                        </li>
                        <li>
                            <span class="li-icon li-icon-6">6</span>
                            <a href="detail.html" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="记一次优化网站首页加载速度的过程">
                                记一次优化网站首页加载速度的过程
                            </a>
                        </li>
                        <li>
                            <span class="li-icon li-icon-7">7</span>
                            <a href="detail.html" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="【超全】开发常用工具">
                                【超全】开发常用工具
                            </a>
                        </li>
                        <li>
                            <span class="li-icon li-icon-8">8</span>
                            <a href="detail.html" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="致那位可能在copy我网站的仁兄">
                                致那位可能在copy我网站的仁兄
                            </a>
                        </li>
                        <li>
                            <span class="li-icon li-icon-9">9</span>
                            <a href="detail.html" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="通过js注入实现单页面显示多条“一言”">
                                通过js注入实现单页面显示多条“一言”
                            </a>
                        </li>
                        <li>
                            <span class="li-icon li-icon-10">10</span>
                            <a href="detail.html" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Java EE重命名为Jakarta EE：Java EE Guardians与Oracle的分歧">
                                Java EE重命名为Jakarta EE：Java EE Guardians与Oracle的分歧
                            </a>
                        </li>
                    </ol>
                </div>
                <div role="tabpanel" class="tab-pane" id="messages">
                    <ol class="list-unstyled">
                        <li>
                            <span class="li-icon li-icon-1">1</span>
                            <a href="detail.html" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="SpringBoot项目实战（3）：整合Freemark模板">
                                SpringBoot项目实战（3）：整合Freemark模板
                            </a>
                        </li>
                        <li>
                            <span class="li-icon li-icon-2">2</span>
                            <a href="detail.html" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Maven打包过滤jar包">
                                Maven打包过滤jar包
                            </a>
                        </li>
                        <li>
                            <span class="li-icon li-icon-3">3</span>
                            <a href="detail.html" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="调试mysql存储过程">
                                调试mysql存储过程
                            </a>
                        </li>
                        <li>
                            <span class="li-icon li-icon-4">4</span>
                            <a href="detail.html" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Spring MVC 中上传文件的多种实现及区别">
                                Spring MVC 中上传文件的多种实现及区别
                            </a>
                        </li>
                        <li>
                            <span class="li-icon li-icon-5">5</span>
                            <a href="detail.html" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="base64字符串解码转换成图片">
                                base64字符串解码转换成图片
                            </a>
                        </li>
                        <li>
                            <span class="li-icon li-icon-6">6</span>
                            <a href="detail.html" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="SpringBoot项目实战（2）：集成SpringBoot">
                                SpringBoot项目实战（2）：集成SpringBoot
                            </a>
                        </li>
                        <li>
                            <span class="li-icon li-icon-7">7</span>
                            <a href="detail.html" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="SpringBoot项目实战（5）：集成分页插件">
                                SpringBoot项目实战（5）：集成分页插件
                            </a>
                        </li>
                        <li>
                            <span class="li-icon li-icon-8">8</span>
                            <a href="detail.html" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Centos7安装Docker">
                                Centos7安装Docker
                            </a>
                        </li>
                        <li>
                            <span class="li-icon li-icon-9">9</span>
                            <a href="detail.html" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Java EE重命名为Jakarta EE：Java EE Guardians与Oracle的分歧">
                                Java EE重命名为Jakarta EE：Java EE Guardians与Oracle的分歧
                            </a>
                        </li>
                        <li>
                            <span class="li-icon li-icon-10">10</span>
                            <a href="detail.html" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="SpringBoot配置属性之Migration">
                                SpringBoot配置属性之Migration
                            </a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <div class="sidebar-module">
            <h5 class="sidebar-title"><i class="fa fa-info icon"></i><strong>网站信息</strong></h5>
            <ul class="ul-default">
                <li> <i class="fa fa-file fa-fw"></i> 文章总数：92 篇</li>
                <li> <i class="fa fa-tags fa-fw"></i> 标签总数：33 个</li>
                <li> <i class="fa fa-folder-open fa-fw"></i> 分类总数：6 个</li>
                <li> <i class="fa fa-comments fa-fw"></i> 留言数量：50 条</li>
                <li> <i class="fa fa-users fa-fw"></i> 在线人数：<span class="online">11</span>人</li>
                <li> <i class="fa fa-calendar fa-fw"></i> 运行天数：201天</li>
                <li> <i class="fa fa-pencil-square fa-fw"></i> 最后更新：2018年04月02日22点</li>
            </ul>
        </div>
    </div>
</div>
<section class="links index-links">
    <ul class="list-unstyled list-inline">
       <!-- <li>
            <a href="https://www.zhyd.me/" target="_blank" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="一个程序员的个人博客，心之所向，无所不能。">
                <img src="./img/user.png" alt="张亚东博客" onerror="this.src='./img/user.png'">张亚东博客
            </a>
        </li>
        <li>
            <a href="https://www.zhyd.me/" target="_blank" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="一个程序员的个人博客，心之所向，无所不能。">
                <img src="./img/user.png" alt="张亚东博客" onerror="this.src='./img/user.png'">张亚东博客
            </a>
        </li>
        <li>
            <a href="https://www.zhyd.me/" target="_blank" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="一个程序员的个人博客，心之所向，无所不能。">
                <img src="./img/user.png" alt="张亚东博客" onerror="this.src='./img/user.png'">张亚东博客
            </a>
        </li>
        <li>
            <a href="https://www.zhyd.me/" target="_blank" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="一个程序员的个人博客，心之所向，无所不能。">
                <img src="./img/user.png" alt="张亚东博客" onerror="this.src='./img/user.png'">张亚东博客
            </a>
        </li>
        <li>
            <a href="https://www.zhyd.me/" target="_blank" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="一个程序员的个人博客，心之所向，无所不能。">
                <img src="./img/user.png" alt="张亚东博客" onerror="this.src='./img/user.png'">张亚东博客
            </a>
        </li>
        <li>
            <a href="https://www.zhyd.me/" target="_blank" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="一个程序员的个人博客，心之所向，无所不能。">
                <img src="./img/user.png" alt="张亚东博客" onerror="this.src='./img/user.png'">张亚东博客
            </a>
        </li>
        <li>
            <a href="https://www.zhyd.me/" target="_blank" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="一个程序员的个人博客，心之所向，无所不能。">
                <img src="./img/user.png" alt="张亚东博客" onerror="this.src='./img/user.png'">张亚东博客
            </a>
        </li>
        <li>
            <a href="links.html" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="更多链接"><i class="fa fa-plus"></i>更多链接</a>
        </li>
    </ul>-->
</section>
<div class="modal fade nav-search-box" tabindex="-1" role="dialog" aria-labelledby="navSearchModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style="padding: 5px 15px;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: 10px;"><span aria-hidden="true">×</span></button>
                <h4><i class="fa fa-search"></i> 搜索文章</h4>
            </div>
            <div class="modal-body">
                <form action="#" method="post" class="form-horizontal searchForm" id="searchForm">
                    <input type="hidden" name="pageNumber" value="1">
                    <div class="input-group bottom-line">
                        <input type="text" class="form-control br-none" name="keywords" value="" required="required" placeholder="输入搜索内容">
                        <span class="input-group-btn">
									<button class="btn btn-default br-none nav-search-btn pointer" type="submit"><i class="fa fa-search"></i> 搜索</button>
								</span>
                    </div>
                    <div class="clear"></div>
                    <ul class="list-unstyled list-inline search-hot">
                        <li><strong style="position: relative;top: 2px;color: #999999;">热门搜索：</strong></li>
                        <li>
                            <a class="pointer" rel="external nofollow"><span class="label label-default">Java</span></a>
                        </li>
                        <li>
                            <a class="pointer" rel="external nofollow"><span class="label label-primary">Springboot</span></a>
                        </li>
                        <li>
                            <a class="pointer" rel="external nofollow"><span class="label label-success">Linux</span></a>
                        </li>
                        <li>
                            <a class="pointer" rel="external nofollow"><span class="label label-info">Maven</span></a>
                        </li>
                        <li>
                            <a class="pointer" rel="external nofollow"><span class="label label-warning">Bootstrap</span></a>
                        </li>
                        <li>
                            <a class="pointer" rel="external nofollow"><span class="label label-danger">阿里云</span></a>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade bs-example-modal-sm" id="comment-detail-modal" tabindex="-1" role="dialog" aria-labelledby="comment-detail-modal-label">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="comment-detail-modal-label">评论信息框</h4>
                <small><i class="fa fa-lightbulb-o fa-fw"></i>可以通过QQ号实时获取昵称和头像</small>
            </div>
            <div class="modal-body">
                <form id="detail-form">
                    <input type="hidden" name="avatar">
                    <div class="form-group input-logo">
                        <input type="text" class="form-control" name="qq" placeholder="选填" value="">
                        <img class="pull-left hide" alt="">
                        <span class="fa fa-qq pull-left" aria-hidden="true">QQ</span>
                    </div>
                    <div class="form-group input-logo">
                        <input type="text" class="form-control" name="nickname" placeholder="必填" value="匿名">
                        <span class="fa fa-user pull-left" aria-hidden="true">昵称</span>
                    </div>
                    <div class="form-group input-logo">
                        <input type="text" class="form-control" name="email" placeholder="选填">
                        <span class="fa fa-envelope pull-left" aria-hidden="true">邮箱</span>
                    </div>
                    <div class="form-group input-logo">
                        <input type="text" class="form-control" name="url" placeholder="选填">
                        <span class="fa fa-globe pull-left" aria-hidden="true">网址</span>
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-default btn-sm" id="detail-form-btn"><i class="fa fa-smile-o"></i>提交评论</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="reward" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title">山无棱江水为竭，冬雷震震夏雨雪，才敢请君舍</h4>
            </div>
            <div class="modal-body">
                <div class="rewardType" align="center">
                    <ul class="list-unstyle list-inline">
                        <li style="margin-right: 20px;">
                            <div class="iradio_square-green checked" style="position: relative;"><input type="radio" name="type" id="alipay" onclick="PaymentUtils.change(0)" data-index="0" checked="checked" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div><span style="margin-left: 5px;">支付宝</span>
                        </li>
                        <li style="margin-right: 20px;">
                            <div class="iradio_square-green" style="position: relative;"><input type="radio" name="type" id="wechat" onclick="PaymentUtils.change(1)" data-index="1" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div><span style="margin-left: 5px;">微信</span>
                        </li>
                    </ul>
                </div>
                <div id="qrcode-container" align="center" style="margin-top: 10px;"></div>
                <div style="width: 100%;color: #a3a3a3;font-size: 16px;font-family: 'Microsoft YaHei';text-align: center;">
                    转账时请备注“<strong>博客赞助</strong>”
                </div>
            </div>
        </div>
        <small class="font-bold"></small>
    </div>
    <small class="font-bold"> </small>
</div>
<!-- loading弹窗 -->
<div id="loading">
    <div class="filter"></div>
    <div class="loader">
        <div class="loading-1"></div>
        <div class="loading-2">Loading...</div>
    </div>
</div>