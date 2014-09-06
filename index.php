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
                    <?php get_template_part( 'includes/mymenu'); ?>
                </div>
            </header>
            <article>
              
                                    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/index_files/flexslider.css">
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/index_files/jquery.js"></script>
<div id="slide-show">

    <div class="flexslider">
        <ul class="slides">

                            <li>
                    <img src="<?php bloginfo('template_url') ?>/index_files/8PYP_1395199147.jpg" style="width: 960px; height: 405px;">

                </li>  
                            <li>
                    <img src="<?php bloginfo('template_url') ?>/index_files/xMPs9_1395198399.jpg" style="width: 960px; height: 405px;">

                </li>  
            
        </ul>
    </div>

</div>
<div id="index_2column_wrapper">
    <div id="content" class="left">
        <?php
        $the_slug = 've-cong-ty';
        $args=array(
          'name' => $the_slug,
          'post_type' => 'post',
          'post_status' => 'publish',
          'numberposts' => 1
        );
        query_posts($args);
        while (have_posts()): the_post();  
            $post = pll_get_post($post->ID);
        ?>
            <h3 class="title"><?php the_title(); ?></h3>
           <p><?php the_excerpt(); ?></p>
           <a href="<?php the_permalink(); ?>" class="btn-more">đọc tiếp &raquo</a>
        <?php endwhile; ?>
    </div>
        
      
    <div class="right">
        <div id="list-news" class="block_right">

            <h3 class="title"><span>Tin Tức</span></h3>
            <ul class="list-news" style="margin:5px 10px;">
                <?php query_posts( '&cat=15' ); ?>
                    <?php if (have_posts()) : while(have_posts()) : the_post(); 
                        $post = pll_get_post($post->ID);
                    ?>
                        <li>
                            <div class="title"><span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><span class="show-date"><?php the_date('Y-m-d'); ?></span></span></div>
                            <div class="content-more">
                                <?php if ( has_post_thumbnail() ) { ?>
                                    <?php the_post_thumbnail(array(70, 80), array('class' => 'thumbnail')); ?>
                                <?php } ?>
                                <span><?php the_excerpt(); ?></span>
                            </div>                    
                            <a class="btn-more" href="<?php the_permalink(); ?>">đọc tiếp &raquo</a>
                        </li>
                <?php endwhile; ?>
                <?php endif; ?>
                
            </ul>        
            </div>
            <div class="main_right_sidebar green_border block_right" id="index_contact">
                <p id="index_contact_title">Liên hệ:</p>
                <p id="index_tel">+084(0)54 6558332</p>
                <p id="index_address">25 Nguyễn Văn Cừ, Thành phố Huế, Việt Nam</p>
                <p id="index_mail"><a href="http://www.brycen.com.vn/contacts">お問い合わせ</a></p>
            </div>
            <div class="main_right_sidebar green_border block_right" id="index_contact">
                <a href="http://www.brycen.co.jp/" target="_blank">
                    <div class="left_sidebar green_border">
                        <section id="corpinfo">
                            <h3>Brycen Nhật Bản</h3>
                            <p class="index_menu_img"><img alt="BRYCEN Co.,Ltd." src="<?php bloginfo('template_url') ?>/index_files/img_index_corpinfo.png"></p>
                            <p>Năm nay Brycen đã tròn 28 năm thành lập.<br>
                            </p>
                        </section>
                    </div>
                </a>
            </div>    
            </div>
</div>
<script type="text/javascript" charset="utf-8">
    $(window).load(function() {
        $('.flexslider').flexslider({
            controlNav: false,
            animation: 'slide',
            pauseOnHover: true,
            slideshowSpeed: 5000
        });
        ////////////
        $('.template-well .toursx .articlex').flexslider({
            animationLoop: true,
            controlNav: false,
            animation: 'slide',
            slideshowSpeed: 5000,
            itemWidth: 157,
            itemMargin: 50,
            minItems: 4,
            maxItems: 4
        });

    });
</script>


   
                    
                    <div id="block">
                        <ul>
                           <li class="first">
                        <a href="http://www.brycen.com.vn/groups/detail/id/73/lang/vi"> <img src="<?php bloginfo('template_url') ?>/index_files/Zh37l_1395043244.jpg"> </a> 
                           
                        <div class="block-content">
                            <span>
                               Bộ phận GA  là bộ phận tổ chức thực hiện,
 quản lý công tác hành chính nhân sự, kế hoạch và trao đổi, truyền đạt 
thông tin từ lãnh đạo đến các bộ phận
                            </span>
                        </div>
                 
                 </li><li class="">
                        <a href="http://www.brycen.com.vn/groups/detail/id/26/lang/vi"> <img src="<?php bloginfo('template_url') ?>/index_files/ewzeN_1395044954.jpg"> </a> 
                           
                        <div class="block-content">
                            <span>
                               Bộ phận Dev là bộ phận thực hiện phát 
triển gia công giữa  Việt Nam và Nhật Bản với chi phí tối thiểu và dịch 
vụ đảm bảo,...
                            </span>
                        </div>
                 
                 </li><li class="last">
                        <a href="http://www.brycen.com.vn/groups/detail/id/28/lang/vi"> <img src="<?php bloginfo('template_url') ?>/index_files/l5c45_1395044993.jpg"> </a> 
                           
                        <div class="block-content">
                            <span>
                               DTP là viết tắt của cụm từ tiếng anh 
(Desktop Publishing). Là bộ phận chuyên gia công các loại ảnh, 
                            </span>
                        </div>
                 
                 </li><li class="">
                        <a href="http://www.brycen.com.vn/groups/detail/id/27/lang/vi"> <img src="<?php bloginfo('template_url') ?>/index_files/503ry_1395045349.jpg"> </a> 
                           
                        <div class="block-content">
                            <span>
                               BLJ là viết tắt từ cụm từ tiếng anh 
B-Luck Jobber. Là bộ phận thực hiện việc hỗ trợ việc ứng dụng dịch vụ dự
 báo số lượng bán hàng ...
                            </span>
                        </div>
                 
                 </li><li class="">
                        <a href="http://www.brycen.com.vn/groups/detail/id/29/lang/vi"> <img src="<?php bloginfo('template_url') ?>/index_files/vSsc2_1395044908.jpg"> </a> 
                           
                        <div class="block-content">
                            <span>
                               Bộ phận QC là bộ phận đang tiến hành việc lấy chứng nhận ISO (9001 &amp; 27001). 
                            </span>
                        </div>
                 
                 </li><li class="last">
                        <a href="http://www.brycen.com.vn/groups/detail/id/74/lang/vi"> <img src="<?php bloginfo('template_url') ?>/index_files/q945_1395045154.jpg"> </a> 
                           
                        <div class="block-content">
                            <span>
                               Trở thành doanh nghiệp cống hiến rộng 
khắp cho cộng đồng xã hội, lấy được sự tin tưởng của khách hàng thông 
qua sự nghiệp liên quan đến ITC
                            </span>
                        </div>
                 
                 </li>  
                        </ul>
                          
                    </div>
                                </article></div>

            
            <footer>
                <div id="footer-in">
                    <div id="footer-logo" class="left">
                        <a href="#"><img src="<?php bloginfo('template_url') ?>/index_files/logo-footer.png"></a>
                    </div>
                    <div id="footer-about" class="right">
                        <div id="sosial-link">
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/groups/202550473153817/members/" target="_blank"><span class="facebook-icon">&nbsp;</span></a>
                                </li>
                                <li>
                                    <a href="#"><span class="googleplus-icon">&nbsp;</span></a>
                                </li>
                                <li>
                                    <a href="#"><span class="twiter-icon">&nbsp;</span></a>
                                </li>
                                <li>
                                    <a href="#"><span class="mail-icon">&nbsp;</span></a>
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
                                    <li class=" first"><a href="http://www.brycen.com.vn/cms/index/lang/vi/id/28">Giới thiệu</a></li>
                                    <li class=""><a href="http://www.brycen.com.vn/groups/index/lang/vi">Đội nhóm</a></li>
                                    <!--<li class=""><a href="/news/index/lang/vi">Tin Tức</a></li>-->
                                    <li class=""><a href="http://www.brycen.com.vn/brycenjp/index/lang/vi">Brycen Nhật Bản</a></li>
                                    <!--<li class=""><a href="/events">Sự kiện</a></li>-->
                                    <li><a href="#">Đối tác</a></li>
                                    <li class=" last"><a href="http://www.brycen.com.vn/contacts">Liên Hệ</a></li>
                                </ul>
                            </nav>
                        </div>

                    </div>
                    <div class="clear-both"></div>
                </div>
            </footer>
        
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

    

</body></html>