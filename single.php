<html lang="vi"><head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="msvalidate.01" content="A899235D85B909257A24DC4705C60D7D">
        <link rel="shortcut icon" href="http://www.brycen.com.vn/public/images/iconfav.ico" type="image/x-icon">
        <title>Brycen </title>      
        <meta name="Keywords" content="アプリケーション,ソフトウェア,オフショア,組込,組み込み,カメラ,画像,無線,システム開発,IT,ICT,WEB,東京,ブライセン,BRYCEN,SOFTWARE,DEVELOPMENT,HUE,DTP,BLJ,JAPAN,PHP,JAVA,IOS,ANDROID">
        <meta name="Description" content="Brycen Vietnam, アプリケーション・ソフトウェア開発、ウェブサイト開発、需要予測型自動発注システム開発・運用支援、DTP活動（画像加工・地図作成,phát triển ứng dụng &amp; phân mềm, phát triển Website, hỗ trợ ứng dụng &amp; phát triển hệ thống bán hàng tự động theo sự dự đoán nhu cầu, tổ chức hoạt động DTP (gia công hình ảnh &amp; chỉnh sửa bản đồ)">
                
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>" type="text/css" />
        
        <script src="<?php bloginfo('template_url') ?>/index_files/analytics.js" async=""></script><script type="text/javascript" src="<?php bloginfo('template_url') ?>/index_files/jquery-1.js"></script>
        <!--[if lt IE 9]>
                        <script src="/public/js/html5.js"></script>
        <![endif]-->
    </head>
    <body>
        <div id="wrapper">
            <header>
                <div id="header-in">
                    <div id="header-top">
                        <div id="logo" class="left">
                            <a href="http://www.brycen.com.vn/"><img src="<?php bloginfo('template_url') ?>/index_files/logo.png"></a>
                        </div>
                        <div id="language" class="right">
                            <ul><?php pll_the_languages(array('show_flags'=>1,'show_names'=>0)); ?></ul>
                        </div>
                    </div>
                    <div id="header-bottom">
                        <nav>
                            <ul>
                                <li class=" first">
                                    <a>Giới thiệu</a>
                                    <ul class="level1 submenu">
                                        <li>
                                            <a href="http://www.brycen.com.vn/cms/index/lang/vi/id/28">Công ty Brycen Việt Nam</a>
                                        </li>
                                        <li>
                                            <a href="http://www.brycen.com.vn/cms/index/lang/vi/id/22">Chiến lược kinh doanh</a>
                                        </li>
                                    </ul>

                                </li>
                                <li class="">
                                    <a href="http://www.brycen.com.vn/groups/index/lang/vi">
                                           Đội nhóm                                    </a>
                                </li>
                                <!--<li class="">
                                    <a href="#">Tin Tức                                    </a>
                                </li>-->
                                <li class="">
                                    <a href="http://www.brycen.com.vn/brycenjp/index/lang/vi">Brycen Nhật Bản</a>
                                   
                                </li>
                                <!--
                                <li class="">
                                    <a href="/events"
                                       >
                                           Sự kiện                                    </a>
                                </li>-->
                                <li class="">
                                    <a href="http://www.brycen.com.vn/news/index/lang/vi">
                                        Tin Tức                                    </a>
                                </li>
                                <li class=""><a href="#">Đối tác</a></li>
                                 <li class="last ">
                                    <a href="http://www.brycen.com.vn/tuyendung">Tuyển dụng</a>
                                </li>
                                <li class="last ">
                                    <a href="http://www.brycen.com.vn/contacts">Liên Hệ</a>
                                </li>
                            </ul>
                        </nav>
                        <script type="text/javascript">
                            $("div#header-bottom li").hover(function(){
                                $(this).toggleClass('active'); 
                                $(this).find('ul').toggleClass('hover');
                                
                                
                            })
                        </script>
                    </div>
                </div>
            </header>
            <article>
              <?php
               while ( have_posts() ) : the_post(); ?> 
                                    <div id="index_2column_wrapper">

                        <div id="content" class="right">

                                <h3 class="title"><?php the_title(); ?> <span class="back"><a onclick="goBack()">&#171;Quay lại</a></span></h3>
    <div  class="center-justified">
        <p style="text-align: justify">
            <p>
	<?php the_content(); ?>
        </p>
    </div>
<?php endwhile; ?>
    <div class="relates_news">
        <div class="title_new_news">
            <h2>Các tin khác</h2>
        </div>
        <ul class="list_news">
            <?php
    $args = array( 'numberposts' => '5' );
    $recent_posts = wp_get_recent_posts( $args );
    foreach( $recent_posts as $recent ){
        echo '<li class="news-related"><h4><a href="' . get_permalink($recent["ID"]) . '" >' .   $recent["post_title"].'</a></h4></li> ';
    }
?>
            </ul>
    </div>
 
<script type="text/javascript">
    function goBack()
    {
    window.history.back()
    }
    
    
</script>    
    
﻿ 

                        </div>
                                            
                                       
                        <div id="navigation-left" class="left movable">
                            <h3 class="title"><span>Giới thiệu</span></h3><ul class="list-title level0">
                <li>
                    <div class="parent-menu">
                        <a id="12"><span>» Brycen Việt Nam</span></a>
                    </div>
                    <ul id="gr12" class="active">
                        <li id="27">
                            <a href="/cms/index/id/27/lang/vi"><span>Tóm tắt</span></a>
                        </li>
                        <li id="27">
                            <a href="/cms/index/id/30/lang/vi"><span>Sơ đồ tổ chức</span></a>
                        </li>
                        <li id="26">
                            <a href="/cms/index/id/26/lang/vi"><span>Đại diện chào hỏi</span></a>
                        </li>
                        
                    </ul>
                </li>
                
              </ul><script>
            var parentId = "138";
            jQuery(window).load(function($){
                jQuery("ul li#"+parentId).addClass("active");
        
            });
             </script>
                            <script type="text/javascript">
                                $("div#list-news ul li div a").click(function(){
                                    id = this.id;
                                    //$(this).find('ul').toggleClass('active');
                                    $("ul#gr"+id).toggleClass('active');
                                })
                            </script>
                         </div>
                                    </div>

            </article>
            <footer>
                <div id="footer-in">
                    <div id="footer-logo" class="left">
                        <a href="#"><img src="/public/images/logo-footer.png"></a>
                    </div>
                    <div id="footer-about" class="right">
                        <div id="sosial-link">
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/groups/202550473153817/members/" target="_blank"><span class="facebook-icon">&nbsp</span></a>
                                </li>
                                <li>
                                    <a href="#"><span class="googleplus-icon">&nbsp</span></a>
                                </li>
                                <li>
                                    <a href="#"><span class="twiter-icon">&nbsp</span></a>
                                </li>
                                <li>
                                    <a href="#"><span class="mail-icon">&nbsp</span></a>
                                </li>
                            </ul>
                        </div>
                        <div id="copyright">
                            <span class="green-color">Copyright (C) Brycen Viet Nam Co,Ltd. All Right Reserved</span>
                        </div>
                        <div class="clear-both"></div>
                        <div id="footer-menu">
                            <nav>
                                <ul>
                                    <li class=" first"><a href="/cms/index/lang/vi/id/28">Giới thiệu</a></li>
                                    <li class=""><a href="/groups/index/lang/vi">Đội nhóm</a></li>
                                    <!--<li class="active"><a href="/news/index/lang/vi">Tin Tức</a></li>-->
                                    <li class=""><a href="/brycenjp/index/lang/vi">Brycen Nhật Bản</a></li>
                                    <!--<li class=""><a href="/events">Sự kiện</a></li>-->
                                    <li><a href="#">Đối tác</a></li>
                                    <li class=" last"><a href="/contacts">Liên Hệ</a></li>
                                </ul>
                            </nav>
                        </div>

                    </div>
                    <div class="clear-both"></div>
                </div>
            </footer>
        </div>
        <script type="text/javascript">
            
            $(window).scroll(function() {
                var stop = $(this).scrollTop();
                var padd = $(this).scrollTop() -120;
                var he = $(".movable").height();
                var limit = $("#index_2column_wrapper").height();
                if (padd >= 0) {
                    if (he + padd <= limit) {
                        $(".movable").stop().animate({ "margin-top": padd }, 500);
                    } else {
                        $(".movable").stop().animate({ "margin-top": limit - he }, 500);
                    }
                } else {
                    $(".movable").stop().animate({ "margin-top": 0 }, 500);
                }
            });


        </script>    
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-37105809-2', 'auto');
            ga('send', 'pageview');

        </script>

    </body>
</html>
