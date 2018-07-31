  <?php
        //文章返回数据处理
  $article = !empty($bbsList['page_Data']['0']) ? $bbsList['page_Data']['0'] : null;
  ?>
    <nav class="breadcrumb">
        <a class="crumbs" title="" href="/" data-toggle="tooltip" data-placement="bottom" data-original-title="返回首页"><i class="fa fa-home"></i>首页</a>
        <i class="fa fa-angle-right"></i>
        <a href="?id=<?php  if($article!=null){echo $article['type_id'];} ?>" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="点击查看该分类文章"><?php  if($article!=null){echo $article['name'];}?></a>
        <i class="fa fa-angle-right"></i>正文
    </nav>
    <div class="row">
        <div class="col-sm-8 blog-main">
            <div class="blog-body overflow-initial fade-in">
                <div class="article-flag">
                    <span class="article-blockquote article-blockquote-green"></span>
                    <span class="article-original article-original-green">
								<a href="detail.html">原创</a>
							</span>
                    <div class="blog-info-meta pull-right">
                        <ul class="list-unstyled list-inline">
                            <li><i class="fa fa-clock-o fa-fw"></i>发表于 <?php if($article!=null){echo $article['create_time'];}?></li>
                            <li><i class="fa fa-eye fa-fw"></i>
                                <a class="pointer" data-original-title="89人浏览了该文章" data-toggle="tooltip" data-placement="bottom">浏览 (
                                    <num>89</num>)</a>
                            </li>
                            <li>
                                <a href="detail.html#comment-box" data-original-title="0人评论了该文章" data-toggle="tooltip" data-placement="bottom"><i class="fa fa-comments-o fa-fw"></i>评论 (0)</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="blog-info overflow-initial">
                    <?php if($article!=null){
                       $content =  !empty($article['content']) ? $article['content'] : null;
                       if($content!=null){
                           echo $content;
                       }else{
                           echo '文章内容为空';
                       }
                    }else{
                        echo '文章内容为空';
                    }?>
                    <div class="separateline"><span>正文到此结束</span></div>
                    <div id="social" style="margin-bottom: 45px;">
                        <div class="social-main">
									<span class="like">
										<a href="javascript:;" data-id="92" title="点赞"><i class="fa fa-thumbs-up"></i>赞 <i class="count"> 1</i> </a>
									</span>
                            <div class="shang-p">
                                <div class="shang-empty"><span></span></div>
                                <span class="shang-s"><a onclick="PaymentUtils.show();" style="cursor:pointer">赏</a> </span>
                            </div>
                            <div class="share-sd">
                                <span class="share-s"><a href="javascript:void(0)" id="share-s" title="分享"><i class="fa fa-share-alt"></i>分享</a></span>
                                <div id="share" style="display: none">
                                    <ul class="bdsharebuttonbox bdshare-button-style1-24" data-bd-bind="1523411015945">
                                        <li>
                                            <a title="分享到人人网" class="fa fa-renren" data-cmd="renren" onclick="return false;" href="detail.html#"></a>
                                        </li>
                                        <li>
                                            <a title="分享到腾讯微博" class="fa fa-pinterest-square" data-cmd="tqq" onclick="return false;" href="detail.html#"></a>
                                        </li>
                                        <li>
                                            <a title="分享到QQ空间" class="fa fa-qq" data-cmd="qzone" onclick="return false;" href="detail.html#"></a>
                                        </li>
                                        <li>
                                            <a title="分享到新浪微博" class="fa fa-weibo" data-cmd="tsina" onclick="return false;" href="detail.html#"></a>
                                        </li>
                                        <li>
                                            <a title="分享到微信" class="fa fa-weixin" data-cmd="weixin" onclick="return false;" href="detail.html#"></a>
                                        </li>
                                        <li>
                                            <a title="更多" class="bds_more fa fa-plus-square" data-cmd="more" onclick="return false;" href="detail.html#"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="article-footer overflow-initial">所属分类：
                        <a href="https://www.zhyd.me/type/2" data-original-title="点击查看后端技术分类的文章" data-toggle="tooltip" data-placement="bottom">后端技术</a>
                    </div>
                </div>
            </div>
            <div class="blog-body article-tag">
                <div class="cat">
                    <ul class="list-unstyled">
                        <li>
                            <strong>本文标签：</strong>
                            <a href="https://www.zhyd.me/tag/32" class="c-label" data-original-title="Cordova" data-toggle="tooltip" data-placement="bottom" target="_blank">Cordova</a>
                            <a href="https://www.zhyd.me/tag/33" class="c-label" data-original-title="Android" data-toggle="tooltip" data-placement="bottom" target="_blank">Android</a>
                        </li>
                        <li>
                            <strong>版权声明：</strong> 本站原创文章，于2018年04月08日由
                            <a href="https://www.zhyd.me/" target="_blank" data-original-title="张亚东博客" data-toggle="tooltip" data-placement="bottom"><strong>张亚东</strong></a>发布，转载请注明出处
                        </li>
                    </ul>
                </div>
            </div>
            <div class="blog-body">
                <a href="https://promotion.aliyun.com/ntms/act/ambassador/sharetouser.html?userCode=wylo59db&amp;utm_source=wylo59db" target="_blank" rel="external nofollow">
                    <img src="./img/ad/aliyun_sale1000-60.png" alt="阿里云首购8折" class="img-responsive">
                </a>
            </div>
            <div class="blog-body prev-next">
                <nav class="nav-single wow" data-wow-delay="0.3s">
                    <a href="detail.html" rel="prev">
								<span class="meta-nav" data-original-title="【漏洞公告】Spring Framework多个安全漏洞预警" data-toggle="tooltip" data-placement="bottom"><span class="post-nav"><i class="fa fa-angle-left"></i> 上一篇</span>
								<br>【漏洞公告】Spring Framework多个安全漏洞预警
								</span>
                    </a>
                    <a href="detail.html" rel="nofollow next">
								<span class="meta-nav" data-original-title="已经到最后一篇了" data-toggle="tooltip" data-placement="bottom"><span class="post-nav">下一篇 <i class="fa fa-angle-right"></i></span>
								<br>已经到最后一篇了
								</span>
                    </a>
                    <div class="clear"></div>
                </nav>
            </div>
            <div class="blog-body clear overflow-initial">
                <h4 class="bottom-line"><i class="fa fa-fire icon"></i><strong>热门推荐</strong></h4>
                <ul class="list-unstyled">
                    <li class="line-li">
                        <div class="line-container">
                            <div class="line-left">
                                <img class="lazy-img" data-original="http://p4c3z3uxb.bkt.clouddn.com/flyat/cover/20170405174038272.png" width="50" height="50" rel="external nofollow">
                            </div>
                            <div class="line-right">
                                <div class="text">
                                    <a href="detail.html" data-original-title="778人浏览了该文章" data-toggle="tooltip" data-placement="bottom">
                                        Springboot + Freemarker项目中使用自定义注解
                                    </a>
                                </div>
                                <div class="text">
                                    <span class="views" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="文章阅读次数"><i class="fa fa-eye fa-fw"></i>浏览(778)</span>
                                    <span class="comment" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="文章评论次数">
												<a href="detail.html#comment-box" rel="external nofollow">
													<i class="fa fa-comments-o fa-fw"></i>评论(0)
												</a>
											</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="line-li">
                        <div class="line-container">
                            <div class="line-left">
                                <img class="lazy-img" data-original="http://p4c3z3uxb.bkt.clouddn.com/flyat/cover/20170502143953315.jpg" width="50" height="50" rel="external nofollow">
                            </div>
                            <div class="line-right">
                                <div class="text">
                                    <a href="detail.html" data-original-title="297人浏览了该文章" data-toggle="tooltip" data-placement="bottom">
                                        Linux中ImageIO生成图片中文乱码
                                    </a>
                                </div>
                                <div class="text">
                                    <span class="views" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="文章阅读次数"><i class="fa fa-eye fa-fw"></i>浏览(297)</span>
                                    <span class="comment" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="文章评论次数">
												<a href="detail.html#comment-box" rel="external nofollow">
													<i class="fa fa-comments-o fa-fw"></i>评论(0)
												</a>
											</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="line-li">
                        <div class="line-container">
                            <div class="line-left">
                                <img class="lazy-img" data-original="http://p4c3z3uxb.bkt.clouddn.com/flyat%2Fcover%2F20180301205820.jpg" width="50" height="50" rel="external nofollow">
                            </div>
                            <div class="line-right">
                                <div class="text">
                                    <a href="detail.html" data-original-title="250人浏览了该文章" data-toggle="tooltip" data-placement="bottom">
                                        解决微信小程序无法下载非指定域名文件的方案
                                    </a>
                                </div>
                                <div class="text">
                                    <span class="views" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="文章阅读次数"><i class="fa fa-eye fa-fw"></i>浏览(250)</span>
                                    <span class="comment" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="文章评论次数">
												<a href="detail.html#comment-box" rel="external nofollow">
													<i class="fa fa-comments-o fa-fw"></i>评论(0)
												</a>
											</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="line-li">
                        <div class="line-container">
                            <div class="line-left">
                                <!-- <img class="lazy-img" data-original="http://p4c3z3uxb.bkt.clouddn.com/website/img/favicon.ico" width="50" height="50" rel="external nofollow"> -->
                            </div>
                            <div class="line-right">
                                <div class="text">
                                    <a href="detail.html" data-original-title="229人浏览了该文章" data-toggle="tooltip" data-placement="bottom">
                                        记一次服务器日志查看及BUG维护
                                    </a>
                                </div>
                                <div class="text">
                                    <span class="views" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="文章阅读次数"><i class="fa fa-eye fa-fw"></i>浏览(229)</span>
                                    <span class="comment" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="文章评论次数">
												<a href="detail.html#comment-box" rel="external nofollow">
													<i class="fa fa-comments-o fa-fw"></i>评论(0)
												</a>
											</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="line-li">
                        <div class="line-container">
                            <div class="line-left">
                                <img class="lazy-img" data-original="http://p4c3z3uxb.bkt.clouddn.com/flyat%2Fcover%2F1518335776791.jpg" width="50" height="50" rel="external nofollow">
                            </div>
                            <div class="line-right">
                                <div class="text">
                                    <a href="detail.html" data-original-title="207人浏览了该文章" data-toggle="tooltip" data-placement="bottom">
                                        下半年起，谷歌浏览器将把所有HTTP网站标记为“不安全”
                                    </a>
                                </div>
                                <div class="text">
                                    <span class="views" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="文章阅读次数"><i class="fa fa-eye fa-fw"></i>浏览(207)</span>
                                    <span class="comment" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="文章评论次数">
												<a href="detail.html#comment-box" rel="external nofollow">
													<i class="fa fa-comments-o fa-fw"></i>评论(0)
												</a>
											</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="line-li">
                        <div class="line-container">
                            <div class="line-left">
                                <img class="lazy-img" data-original="http://p4c3z3uxb.bkt.clouddn.com/flyat%2Fcover%2F20180316171033.png" width="50" height="50" rel="external nofollow">
                            </div>
                            <div class="line-right">
                                <div class="text">
                                    <a href="detail.html" data-original-title="199人浏览了该文章" data-toggle="tooltip" data-placement="bottom">
                                        通过js注入实现单页面显示多条“一言”
                                    </a>
                                </div>
                                <div class="text">
                                    <span class="views" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="文章阅读次数"><i class="fa fa-eye fa-fw"></i>浏览(199)</span>
                                    <span class="comment" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="文章评论次数">
												<a href="detail.html#comment-box" rel="external nofollow">
													<i class="fa fa-comments-o fa-fw"></i>评论(0)
												</a>
											</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="line-li">
                        <div class="line-container">
                            <div class="line-left">
                                <img class="lazy-img" data-original="http://p4c3z3uxb.bkt.clouddn.com/flyat/cover/20170601134846507.png" width="50" height="50" rel="external nofollow">
                            </div>
                            <div class="line-right">
                                <div class="text">
                                    <a href="detail.html" data-original-title="190人浏览了该文章" data-toggle="tooltip" data-placement="bottom">
                                        配置MySQL开启远程连接的方法
                                    </a>
                                </div>
                                <div class="text">
                                    <span class="views" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="文章阅读次数"><i class="fa fa-eye fa-fw"></i>浏览(190)</span>
                                    <span class="comment" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="文章评论次数">
												<a href="detail.html#comment-box" rel="external nofollow">
												<i class="fa fa-comments-o fa-fw"></i>评论(0)
												</a>
											</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="line-li">
                        <div class="line-container">
                            <div class="line-left">
                                <!-- <img class="lazy-img" data-original="http://p4c3z3uxb.bkt.clouddn.com/website/img/favicon.ico" width="50" height="50" rel="external nofollow"> -->
                            </div>
                            <div class="line-right">
                                <div class="text">
                                    <a href="detail.html" data-original-title="181人浏览了该文章" data-toggle="tooltip" data-placement="bottom">
                                        若有来世，我必褪去这身袈裟，陪你浪迹天涯
                                    </a>
                                </div>
                                <div class="text">
                                    <span class="views" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="文章阅读次数"><i class="fa fa-eye fa-fw"></i>浏览(181)</span>
                                    <span class="comment" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="文章评论次数">
												<a href="detail.html#comment-box" rel="external nofollow">
												<i class="fa fa-comments-o fa-fw"></i>评论(0)
												</a>
											</span>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
            <div class="blog-body clear overflow-initial">
                <h4 class="bottom-line"><i class="fa fa-google-wallet icon"></i><strong>相关文章</strong></h4>
                <ul class="list-unstyled">
                    <li class="line-li">
                        <div class="line-container">
                            <div class="line-right">
                                <div class="text">
                                    <a href="detail.html" data-original-title="89人浏览了该文章" data-toggle="tooltip" data-placement="bottom">
                                        Cordova入门（一）创建android项目
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
            <div class="blog-body clear overflow-initial expansion">
                <div id="comment-box" data-id="92">
                    <!-- 以下内容为评论插件自动生成 -->
                    <div id="comment-place">
                        <div class="comment-post" id="comment-post" style="position: relative">
                            <h4 class="bottom-line"><i class="fa fa-commenting-o fa-fw icon"></i><strong>发表评论</strong><small> - 欢迎回来，<a href="https://www.zhyd.me/" target="_blank" rel="external nofollow">超级管理员<i class="fa fa-smile-o"></i></a></small></h4>
                            <div class="cancel-reply" id="cancel-reply" style="display: none;">
                                <a href="javascript:void(0);" onclick="$.comment.cancelReply(this)" rel="external nofollow"><i class="fa fa-share"></i>取消回复</a>
                            </div>
                            <form class="form-horizontal" role="form" id="comment-form"><input type="hidden" name="pid" id="comment-pid" value="0" size="22" tabindex="1"><textarea id="comment_content" name="content" style="display: none"></textarea>
                                <div id="editor" style="width: 100%;height: 150px;">
                                    <div style="border:1px solid #009a61; border-bottom:0; border-radius:15px 4px 0 0;" class="w-e-toolbar" id="toolbar-elem5063079668968238">
                                        <div class="w-e-menu" style="z-index:101;"> <i class="w-e-icon-terminal"><i>        </i></i>
                                        </div>
                                        <div class="w-e-menu" style="z-index:101;"> <i class="w-e-icon-bold"><i>        </i></i>
                                        </div>
                                        <div class="w-e-menu" style="z-index:101;"> <i class="w-e-icon-italic"><i>        </i></i>
                                        </div>
                                        <div class="w-e-menu" style="z-index:101;"> <i class="w-e-icon-underline"><i>        </i></i>
                                        </div>
                                        <div class="w-e-menu" id="w-e-img6663164231337577" style="z-index:101;"><i class="w-e-icon-image"><i></i></i>
                                        </div>
                                        <div class="w-e-menu" style="z-index:101;"><i class="w-e-icon-link"><i></i></i>
                                        </div>
                                        <div class="w-e-menu" style="z-index:101;"><i class="w-e-icon-list2"><i></i></i>
                                        </div>
                                        <div class="w-e-menu" style="z-index:101;"> <i class="w-e-icon-quotes-left"><i>        </i></i>
                                        </div>
                                        <div class="w-e-menu" style="z-index:101;"> <i class="w-e-icon-happy"><i>        </i></i>
                                        </div>
                                        <div class="w-e-menu">
                                            <a class="_wangEditor_btn_fullscreen" href="guestbook.html###" onclick="window.wangEditor.fullscreen.toggleFullscreen(&#39;#editor&#39;)" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="全屏编辑"><i class="fa fa-expand"></i></a>
                                        </div>
                                    </div>
                                    <div style="border:1px solid #009a61; border-radius:0px 0px 15px 0px; height:100%; max-height:115px; z-index:100;" class="w-e-text-container">
                                        <div contenteditable="true" style="width:100%; height:100%;" class="w-e-text" id="text-elem39053303385807125">
                                            <p><br></p>
                                        </div>
                                    </div>
                                </div>
                                <div style="position: absolute;right: 10px;bottom: 65px;font-size: 14px;font-weight: 700;color: #ececec;">张亚东博客<br>https://www.zhyd.me<br>讲文明、要和谐</div>
                                <a id="comment-form-btn" type="button" data-loading-text="正在提交评论..." class="btn btn-default btn-block">提交评论</a>
                            </form>
                        </div>
                    </div>
                    <div class="commentList">
                        <h5 class="bottom-line"><i class="fa fa-comments-o fa-fw icon"></i><strong><em>29</em> 条评论</strong></h5>
                        <ul class="comment">
                            <li>
                                <div class="comment-body fade-in" id="comment-51">
                                    <div class="cheader">
                                        <!-- <div class="user-img"><img class="userImage" src="./img/favicon.ico" onerror="this.src='./img/favicon.ico'"></div> -->
                                        <div class="user-info">
                                            <div class="nickname">
                                                <a target="_blank" href="https://www.zhyd.me/" rel="external nofollow"><strong>超级管理员</strong></a>
                                            </div>
                                            <div class="timer"> <i class="fa fa-clock-o fa-fw"></i>2018-04-09 16:51 <i class="fa fa-map-marker fa-fw"></i>北京市北京市 </div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <a href="guestbook.html#comment-48" class="comment-quote">@张亚东博客</a>
                                        <div style="background-color: #f5f5f5;padding: 5px;margin: 5px;border-radius: 4px;"><i class="fa fa-quote-left"></i>
                                            <p></p>
                                            <div style="padding-left: 10px;">
                                                <p>评论内容评论内容评论内容评论内容评论内容评论内容评论内容</p>
                                            </div>
                                        </div>
                                        <div>回复评论回复评论回复评论回复评论回复评论回复评论</div>
                                    </div>
                                    <div class="sign"> <i class="icons os-win1"></i>Windows 7 <i class="sepa"></i> <i class="icons browser-chrome"></i>Chrome 65.0.3325.146 <i class="sepa"></i>
                                        <a href="javascript:void(0);" class="comment-up" onclick="$.comment.praise(51, this)"><i class="fa fa-thumbs-o-up"></i>赞(<span class="count">0</span>)<i class="sepa"></i></a>
                                        <a href="javascript:void(0);" class="comment-down" onclick="$.comment.step(51, this)"><i class="fa fa-thumbs-o-down"></i>踩(<span class="count">0</span>)<i class="sepa"></i></a>
                                        <a href="javascript:void(0);" class="comment-reply" onclick="$.comment.reply(51, this)"><i class="fa fa-reply"></i>回复</a>
                                        <a href="javascript:void(0);" class="comment-flag hide" onclick="$.comment.report(51, this)"><i class="fa fa-flag"></i>举报</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="comment-body fade-in" id="comment-48">
                                    <div class="cheader">
                                        <!-- <div class="user-img"><img class="userImage" src="./img/favicon.ico" onerror="this.src='./img/favicon.ico'"></div> -->
                                        <div class="user-info">
                                            <div class="nickname">
                                                <a target="_blank" href="https://www.zhyd.me/" rel="external nofollow"><strong>张亚东博客</strong></a>
                                            </div>
                                            <div class="timer"> <i class="fa fa-clock-o fa-fw"></i>2018-04-09 14:39 <i class="fa fa-map-marker fa-fw"></i>上海市上海市 </div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div>
                                            <p>评论内容评论内容评论内容评论内容评论内容评论内容评论内容</p>
                                        </div>
                                    </div>
                                    <div class="sign"> <i class="icons os-win1"></i>Windows 7 <i class="sepa"></i> <i class="icons browser-firefox"></i>Firefox 59.0 <i class="sepa"></i>
                                        <a href="javascript:void(0);" class="comment-up" onclick="$.comment.praise(48, this)"><i class="fa fa-thumbs-o-up"></i>赞(<span class="count">0</span>)<i class="sepa"></i></a>
                                        <a href="javascript:void(0);" class="comment-down" onclick="$.comment.step(48, this)"><i class="fa fa-thumbs-o-down"></i>踩(<span class="count">0</span>)<i class="sepa"></i></a>
                                        <a href="javascript:void(0);" class="comment-reply" onclick="$.comment.reply(48, this)"><i class="fa fa-reply"></i>回复</a>
                                        <a href="javascript:void(0);" class="comment-flag hide" onclick="$.comment.report(48, this)"><i class="fa fa-flag"></i>举报</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="comment-body fade-in" id="comment-48">
                                    <div class="cheader">
                                        <!-- <div class="user-img"><img class="userImage" src="./img/favicon.ico" onerror="this.src='./img/favicon.ico'"></div> -->
                                        <div class="user-info">
                                            <div class="nickname">
                                                <a target="_blank" href="https://www.zhyd.me/" rel="external nofollow"><strong>张亚东博客</strong></a>
                                            </div>
                                            <div class="timer"> <i class="fa fa-clock-o fa-fw"></i>2018-04-09 14:39 <i class="fa fa-map-marker fa-fw"></i>上海市上海市 </div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div>
                                            <p>评论内容评论内容评论内容评论内容评论内容评论内容评论内容</p>
                                        </div>
                                    </div>
                                    <div class="sign"> <i class="icons os-win1"></i>Windows 7 <i class="sepa"></i> <i class="icons browser-firefox"></i>Firefox 59.0 <i class="sepa"></i>
                                        <a href="javascript:void(0);" class="comment-up" onclick="$.comment.praise(48, this)"><i class="fa fa-thumbs-o-up"></i>赞(<span class="count">0</span>)<i class="sepa"></i></a>
                                        <a href="javascript:void(0);" class="comment-down" onclick="$.comment.step(48, this)"><i class="fa fa-thumbs-o-down"></i>踩(<span class="count">0</span>)<i class="sepa"></i></a>
                                        <a href="javascript:void(0);" class="comment-reply" onclick="$.comment.reply(48, this)"><i class="fa fa-reply"></i>回复</a>
                                        <a href="javascript:void(0);" class="comment-flag hide" onclick="$.comment.report(48, this)"><i class="fa fa-flag"></i>举报</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="comment-body fade-in" id="comment-48">
                                    <div class="cheader">
                                        <!-- <div class="user-img"><img class="userImage" src="./img/favicon.ico" onerror="this.src='./img/favicon.ico'"></div> -->
                                        <div class="user-info">
                                            <div class="nickname">
                                                <a target="_blank" href="https://www.zhyd.me/" rel="external nofollow"><strong>张亚东博客</strong></a>
                                            </div>
                                            <div class="timer"> <i class="fa fa-clock-o fa-fw"></i>2018-04-09 14:39 <i class="fa fa-map-marker fa-fw"></i>上海市上海市 </div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div>
                                            <p>评论内容评论内容评论内容评论内容评论内容评论内容评论内容</p>
                                        </div>
                                    </div>
                                    <div class="sign"> <i class="icons os-win1"></i>Windows 7 <i class="sepa"></i> <i class="icons browser-firefox"></i>Firefox 59.0 <i class="sepa"></i>
                                        <a href="javascript:void(0);" class="comment-up" onclick="$.comment.praise(48, this)"><i class="fa fa-thumbs-o-up"></i>赞(<span class="count">0</span>)<i class="sepa"></i></a>
                                        <a href="javascript:void(0);" class="comment-down" onclick="$.comment.step(48, this)"><i class="fa fa-thumbs-o-down"></i>踩(<span class="count">0</span>)<i class="sepa"></i></a>
                                        <a href="javascript:void(0);" class="comment-reply" onclick="$.comment.reply(48, this)"><i class="fa fa-reply"></i>回复</a>
                                        <a href="javascript:void(0);" class="comment-flag hide" onclick="$.comment.report(48, this)"><i class="fa fa-flag"></i>举报</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="list-comment-empty-w fade-in">
                                    <div class="empty-prompt-w"><span class="prompt-null-w pointer load-more">加载更多 <i class="fa fa-angle-double-down"></i></span></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- 以上内容为评论插件自动生成 -->
                </div>
            </div>
        </div>
        <div class="col-sm-3 blog-sidebar">
            <div class="sidebar-module">
                <h5 class="sidebar-title"><i class="fa fa-hand-peace-o icon"></i><strong>说给你听</strong></h5>
                <div class="div-quote">
                    <i class="fa fa-quote-left fa-fw"></i>
                    <p id="hitokoto" style="margin-left: 15px;"></p>
                </div>
            </div>
            <div class="sidebar-module">
                <h5 class="sidebar-title"><i class="fa fa-thumbs-o-up icon"></i><strong>站长推荐优惠活动，领优惠券啦~~</strong></h5>
                <a href="https://promotion.aliyun.com/ntms/act/ambassador/sharetouser.html?userCode=wylo59db&amp;utm_source=wylo59db" target="_blank" rel="external nofollow">
                    <img src="./img/ad/aliyun_sale.png" alt="阿里云首购8折" style="margin: 0 auto;" class="img-responsive">
                </a>
            </div>
            <div class="sidebar-module article-module">
                <h5 class="sidebar-title"><i class="fa fa-book icon"></i><strong>本文目录</strong> <i class="fa fa-close pull-right close-article-menu hide pointer"></i></h5>
                <div id="article-menu" style="display: block;">
                    <ul class="list-unstyled">
                        <li style="padding-left:10px;line-height: 2;"><i class="fa fa-angle-right"></i>
                            <a href="detail.html#menu_0" style="display:inline-block;">前言</a>
                        </li>
                        <li style="padding-left:10px;line-height: 2;"><i class="fa fa-angle-right"></i>
                            <a href="detail.html#menu_1" style="display:inline-block;">使用Cordova的基本要求</a>
                        </li>
                        <li style="padding-left:10px;line-height: 2;"><i class="fa fa-angle-right"></i>
                            <a href="detail.html#menu_2" style="display:inline-block;">创建APP</a>
                        </li>
                        <li style="padding-left:10px;line-height: 2;"><i class="fa fa-angle-right"></i>
                            <a href="detail.html#menu_3" style="display:inline-block;">添加Android开发平台&nbsp;&nbsp;</a>
                        </li>
                        <li style="padding-left:10px;line-height: 2;"><i class="fa fa-angle-right"></i>
                            <a href="detail.html#menu_4" style="display:inline-block;">导入Android Studio</a>
                        </li>
                        <li style="padding-left:10px;line-height: 2;"><i class="fa fa-angle-right"></i>
                            <a href="detail.html#menu_5" style="display:inline-block;">使用cordova打包APP</a>
                        </li>
                        <li style="padding-left:10px;line-height: 2;"><i class="fa fa-angle-right"></i>
                            <a href="detail.html#menu_6" style="display:inline-block;">使用AndroidStudio打包APP</a>
                        </li>
                        <li style="padding-left:10px;line-height: 2;"><i class="fa fa-angle-right"></i>
                            <a href="detail.html#menu_7" style="display:inline-block;">参考资料</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="sidebar-module">
                <h5 class="sidebar-title"><i class="fa fa-tags icon"></i><strong>文章标签</strong></h5>
                <ul class="list-unstyled list-inline">
                    <li class="tag-li">
                        <a class="btn btn-default btn-xs" href="https://www.zhyd.me/tag/1" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Linux">
                            Linux
                        </a>
                    </li>
                    <li class="tag-li">
                        <a class="btn btn-default btn-xs" href="https://www.zhyd.me/tag/2" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Java">
                            Java
                        </a>
                    </li>
                    <li class="tag-li">
                        <a class="btn btn-default btn-xs" href="https://www.zhyd.me/tag/3" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Spring">
                            Spring
                        </a>
                    </li>
                    <li class="tag-li">
                        <a class="btn btn-default btn-xs" href="https://www.zhyd.me/tag/4" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Spring Boot">
                            Spring Boot
                        </a>
                    </li>
                    <li class="tag-li">
                        <a class="btn btn-default btn-xs" href="https://www.zhyd.me/tag/5" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Maven">
                            Maven
                        </a>
                    </li>
                    <li class="tag-li">
                        <a class="btn btn-default btn-xs" href="https://www.zhyd.me/tag/6" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Docker">
                            Docker
                        </a>
                    </li>
                    <li class="tag-li">
                        <a class="btn btn-default btn-xs" href="https://www.zhyd.me/tag/7" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="IDE">
                            IDE
                        </a>
                    </li>
                    <li class="tag-li">
                        <a class="btn btn-default btn-xs" href="https://www.zhyd.me/tag/8" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="uzip">
                            uzip
                        </a>
                    </li>
                    <li class="tag-li">
                        <a class="btn btn-default btn-xs" href="https://www.zhyd.me/tag/9" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="war">
                            war
                        </a>
                    </li>
                    <li class="tag-li">
                        <a class="btn btn-default btn-xs" href="https://www.zhyd.me/tag/10" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Shell">
                            Shell
                        </a>
                    </li>
                    <li class="tag-li">
                        <a class="btn btn-default btn-xs" href="https://www.zhyd.me/tag/11" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Flyat">
                            Flyat
                        </a>
                    </li>
                    <li class="tag-li">
                        <a class="btn btn-default btn-xs" href="https://www.zhyd.me/tag/12" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="chrome">
                            chrome
                        </a>
                    </li>
                    <li class="tag-li">
                        <a class="btn btn-default btn-xs" href="https://www.zhyd.me/tag/13" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="自动化测试">
                            自动化测试
                        </a>
                    </li>
                    <li class="tag-li">
                        <a class="btn btn-default btn-xs" href="https://www.zhyd.me/tag/14" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Git">
                            Git
                        </a>
                    </li>
                    <li class="tag-li">
                        <a class="btn btn-default btn-xs" href="https://www.zhyd.me/tag/15" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Task">
                            Task
                        </a>
                    </li>
                    <li class="tag-li">
                        <a class="btn btn-default btn-xs" href="https://www.zhyd.me/tag/16" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="爬虫">
                            爬虫
                        </a>
                    </li>
                    <li class="tag-li">
                        <a class="btn btn-default btn-xs" href="https://www.zhyd.me/tag/17" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="MySQL">
                            MySQL
                        </a>
                    </li>
                    <li class="tag-li">
                        <a class="btn btn-default btn-xs" href="https://www.zhyd.me/tag/18" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="JS">
                            JS
                        </a>
                    </li>
                    <li class="tag-li">
                        <a class="btn btn-default btn-xs" href="https://www.zhyd.me/tag/19" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="正则">
                            正则
                        </a>
                    </li>
                    <li class="tag-li">
                        <a class="btn btn-default btn-xs" href="https://www.zhyd.me/tag/20" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Tomcat">
                            Tomcat
                        </a>
                    </li>
                    <li class="tag-li">
                        <a class="btn btn-default btn-xs" href="https://www.zhyd.me/tag/21" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="FindBugs">
                            FindBugs
                        </a>
                    </li>
                    <li class="tag-li">
                        <a class="btn btn-default btn-xs" href="https://www.zhyd.me/tag/22" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="版本控制">
                            版本控制
                        </a>
                    </li>
                    <li class="tag-li">
                        <a class="btn btn-default btn-xs" href="https://www.zhyd.me/tag/23" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Nginx">
                            Nginx
                        </a>
                    </li>
                    <li class="tag-li">
                        <a class="btn btn-default btn-xs" href="https://www.zhyd.me/tag/24" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Apache">
                            Apache
                        </a>
                    </li>
                    <li class="tag-li">
                        <a class="btn btn-default btn-xs" href="https://www.zhyd.me/tag/25" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="其他">
                            其他
                        </a>
                    </li>
                    <li class="tag-li">
                        <a class="btn btn-default btn-xs" href="https://www.zhyd.me/tag/26" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="阿里云优惠券">
                            阿里云优惠券
                        </a>
                    </li>
                    <li class="tag-li">
                        <a class="btn btn-default btn-xs" href="https://www.zhyd.me/tag/27" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="微信小程序">
                            微信小程序
                        </a>
                    </li>
                    <li class="tag-li">
                        <a class="btn btn-default btn-xs" href="https://www.zhyd.me/tag/28" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="网易云音乐">
                            网易云音乐
                        </a>
                    </li>
                    <li class="tag-li">
                        <a class="btn btn-default btn-xs" href="https://www.zhyd.me/tag/29" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="阿里云服务器">
                            阿里云服务器
                        </a>
                    </li>
                    <li class="tag-li">
                        <a class="btn btn-default btn-xs" href="https://www.zhyd.me/tag/30" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="阿里云优惠活动">
                            阿里云优惠活动
                        </a>
                    </li>
                    <li class="tag-li">
                        <a class="btn btn-default btn-xs" href="https://www.zhyd.me/tag/31" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="ztree">
                            ztree
                        </a>
                    </li>
                    <li class="tag-li">
                        <a class="btn btn-default btn-xs" href="https://www.zhyd.me/tag/32" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Cordova">
                            Cordova
                        </a>
                    </li>
                    <li class="tag-li">
                        <a class="btn btn-default btn-xs" href="https://www.zhyd.me/tag/33" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Android">
                            Android
                        </a>
                    </li>
                </ul>
            </div>
            <div class="sidebar-module">
                <h5 class="sidebar-title"><i class="fa fa-comments icon"></i><strong>近期评论</strong></h5>
                <ul class="list-unstyled list-inline comments">
                    <!-- <li>
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
                </ul> -->
            </div>
            <div class="sidebar-module">
                <ul class="nav nav-tabs sidebar-tabs" role="tablist">
                    <li role="presentation" class="active">
                        <a href="detail.html#home" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-thumbs-o-up"></i>站长推荐</a>
                    </li>
                    <li role="presentation">
                        <a href="detail.html#profile" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-list"></i>近期文章</a>
                    </li>
                    <li role="presentation">
                        <a href="detail.html#messages" aria-controls="messages" role="tab" data-toggle="tab"><i class="fa fa-hand-peace-o"></i>随机文章</a>
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
                                <a href="detail.html" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="SpringBoot配置属性之Security">
                                    SpringBoot配置属性之Security
                                </a>
                            </li>
                            <li>
                                <span class="li-icon li-icon-2">2</span>
                                <a href="detail.html" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="2016年总结">
                                    2016年总结
                                </a>
                            </li>
                            <li>
                                <span class="li-icon li-icon-3">3</span>
                                <a href="detail.html" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="docker常用命令">
                                    docker常用命令
                                </a>
                            </li>
                            <li>
                                <span class="li-icon li-icon-4">4</span>
                                <a href="detail.html" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="使用Shell脚本一键部署项目">
                                    使用Shell脚本一键部署项目
                                </a>
                            </li>
                            <li>
                                <span class="li-icon li-icon-5">5</span>
                                <a href="detail.html" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="vim显示行号等配置和vim中实现格式化内容">
                                    vim显示行号等配置和vim中实现格式化内容
                                </a>
                            </li>
                            <li>
                                <span class="li-icon li-icon-6">6</span>
                                <a href="detail.html" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="【超全】开发常用工具">
                                    【超全】开发常用工具
                                </a>
                            </li>
                            <li>
                                <span class="li-icon li-icon-7">7</span>
                                <a href="detail.html" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="springMVC+mybatis中mapper配置文件使用">
                                    springMVC+mybatis中mapper配置文件使用
                                </a>
                            </li>
                            <li>
                                <span class="li-icon li-icon-8">8</span>
                                <a href="detail.html" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="SpringBoot项目实战（3）：整合Freemark模板">
                                    SpringBoot项目实战（3）：整合Freemark模板
                                </a>
                            </li>
                            <li>
                                <span class="li-icon li-icon-9">9</span>
                                <a href="detail.html" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="SpringBoot配置属性之Migration">
                                    SpringBoot配置属性之Migration
                                </a>
                            </li>
                            <li>
                                <span class="li-icon li-icon-10">10</span>
                                <a href="detail.html" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="js中Cookie的简单使用">
                                    js中Cookie的简单使用
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
</div>
<div class="modal fade nav-search-box" tabindex="-1" role="dialog" aria-labelledby="navSearchModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style="padding: 5px 15px;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: 10px;"><span aria-hidden="true">×</span></button>
                <h4><i class="fa fa-search"></i> 搜索文章</h4>
            </div>
            <div class="modal-body">
                <form action="https://www.zhyd.me/" method="post" class="form-horizontal searchForm" id="searchForm">
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
                <form id="detail-form" novalidate="novalidate" class="bv-form">
                    <input type="hidden" name="avatar">
                    <div class="form-group input-logo">
                        <input type="text" class="form-control" name="qq" placeholder="选填" value="">
                        <img class="pull-left hide" alt="">
                        <span class="fa fa-qq pull-left" aria-hidden="true">QQ</span>
                    </div>
                    <div class="form-group input-logo has-feedback">
                        <input type="text" class="form-control" name="nickname" placeholder="必填" value="匿名" data-bv-field="nickname"><i class="form-control-feedback" data-bv-icon-for="nickname" style="display: none; top: 0px;"></i>
                        <span class="fa fa-user pull-left" aria-hidden="true">昵称</span>
                        <small class="help-block" data-bv-validator="notEmpty" data-bv-for="nickname" data-bv-result="NOT_VALIDATED" style="display: none;">昵称必填</small></div>
                    <div class="form-group input-logo has-feedback">
                        <input type="text" class="form-control" name="email" placeholder="选填" data-bv-field="email"><i class="form-control-feedback" data-bv-icon-for="email" style="display: none; top: 0px;"></i>
                        <span class="fa fa-envelope pull-left" aria-hidden="true">邮箱</span>
                        <small class="help-block" data-bv-validator="emailAddress" data-bv-for="email" data-bv-result="NOT_VALIDATED" style="display: none;">邮箱地址不正确</small></div>
                    <div class="form-group input-logo has-feedback">
                        <input type="text" class="form-control" name="url" placeholder="选填" data-bv-field="url"><i class="form-control-feedback" data-bv-icon-for="url" style="display: none; top: 0px;"></i>
                        <span class="fa fa-globe pull-left" aria-hidden="true">网址</span>
                        <small class="help-block" data-bv-validator="uri" data-bv-for="url" data-bv-result="NOT_VALIDATED" style="display: none;">URL地址不正确</small></div>
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
                <div style="width: 100%;color: #a3a3a3;font-size: 16px;font-family: &#39;Microsoft YaHei&#39;;text-align: center;">
                    转账时请备注“<strong>博客赞助</strong>”
                </div>
            </div>
        </div>
        <small class="font-bold"></small>
    </div>
    <small class="font-bold"> </small>
</div>
<div id="loading" style="display: none;">
    <div class="filter"></div>
    <div class="loader">
        <div class="loading-1"></div>
        <div class="loading-2">Loading...</div>
    </div>
</div>