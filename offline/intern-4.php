<!DOCTYPE html>
<html>
	
<?php 
	define(SUBROOT, '../');
	include (SUBROOT . 'define.php');
?>

<head>
	<meta name="name" content="content" charset="utf-8">
	<title>Lenovo User Experience Labs</title>
	<link rel="stylesheet" type="text/css" href="<?php echo SUBROOT;?>./css/style.css">
    
</head>
<body>
	<?php include $header_file;?>

	<!-- start flexslider -->
	<div id="banner_tabs" class="flexslider">
        <ul class="slides">
            <li>
                    <img class="banner-img" alt="" style="background: url(<?php echo SUBROOT;?>./imgs/offline/intern/intern-4.png) no-repeat center;" src="<?php echo SUBROOT;?>./imgs/slide_imgs/alpha.png">
            </li>
        </ul>
        <!--
        <ul class="flex-direction-nav">
            <li><a class="flex-prev" href="javascript:;">Previous</a></li>
            <li><a class="flex-next" href="javascript:;">Next</a></li>
        </ul>
        <ol id="bannerCtrl" class="flex-control-nav flex-control-paging">
            <li><a>1</a></li>
        </ol> -->
    </div>
	<!-- end flexslider -->

	<div class="content clear">
		<div class="main fl">
				
            <div class="article-title">
           		<p>姚远洋</p>
            </div>
				<div id="jd1-article" class="article">
					<div class="des-center des-jd">
					  <p>院校<br>
                        中国美术学院</p>
                    	<p>Lenovo实习时间<br>
2014年4月—6月<br>
参与yoga3评测
                    	</p>
                        <p>重要经历<br>
                          2014年11月参加美国芝加哥IHA创新设计大赛。<br>
						   2014年9月—2016年4月参与编写《创意设计共性关键技术集成研发（国家科技支撑计划）》<br>
						   2015年6月—2015年7月赴香港参加中国美术学院与香港科技大学合作的design thinking联合课程，并担任助教。<br>
						   2015年9月—2016年3月赴意大利米兰理工大学交流学习，攻读design&engineer专业。<br>
						   2015年9月—2016年5月参与举办首届DIA中国设计智造大奖。</p>
                        <p>个人爱好<br>
                          旅游、萌宠、美食、阅读</p>
                        <p>社交媒体<br>
                          微博：@姚歪歪是只有卧蚕的猫<br>
   							微信：15068812188
                        </p>  
                        <div class="image"><img class="intern-figure" src="<?php echo SUBROOT;?>./imgs/offline/intern/intern-4.1.png"></div>
                        <div class="image"><img class="intern-figure" src="<?php echo SUBROOT;?>./imgs/offline/intern/intern-4.2.png"></div>
                        <div class="image"><img class="intern-figure" src="<?php echo SUBROOT;?>./imgs/offline/intern/intern-4.3.png"></div>
                        <div class="image"><img class="intern-figure" src="<?php echo SUBROOT;?>./imgs/offline/intern/intern-4.4.png"></div>
                        <div class="image"><img class="intern-figure" src="<?php echo SUBROOT;?>./imgs/offline/intern/intern-4.5.png"></div>
                  </div>
            </div>
		</div>
			
        <div id="sticky-anchor-top"></div>
		<div id="sticky" class="side fr">
			<h2>HotArticle 热门文章</h2>
			<div class="side-section">
				<img src="<?php echo SUBROOT;?>./imgs/side_imgs/side_img1.png" alt="">
				<span>很久很久以前的颜色，被放进去了被放进去了</span>
			</div>
			<div class="side-section">
				<img src="<?php echo SUBROOT;?>./imgs/side_imgs/side_img2.png" alt="">
				<span>工匠精神需要一个信仰——手工手工</span>
			</div>
			<div class="side-section">
				<img src="<?php echo SUBROOT;?>./imgs/side_imgs/side_img3.png" alt="">
				<span>土豪不土——私人美术馆成富豪富豪</span>
			</div>
			<div class="side-section">
				<img src="<?php echo SUBROOT;?>./imgs/side_imgs/side_img4.png" alt="">
				<span>用户体验工作坊——与用研相约相约</span>
			</div>
			<div class="about-us">
				<div class="inner">关于我们</div>
				<img class="logo" src="<?php echo SUBROOT;?>./imgs/side_imgs/side_logo.png" alt="">
				<p class="logo-text">LENOVO UX LAB</p>
				<p class="we-chat-text">
					<span class="red-text">| </span>
					<span>官方微信</span>
				</p>
				
				<div class="contact-us clear">
					<img src="<?php echo SUBROOT;?>./imgs/side_imgs/we_chate2.png" alt="">
					<div class="des-text">
						<span><strong>关注微信公众号：<br/>"IdeaPad用户研究中心"<br/></strong></span>
						<span class="text-small">和志同道合的小伙伴们一同分享专业的案例、实验以及又去的用研经历和咨询。</span>
					</div>
					
				</div>

			</div>
			
		</div>
    	<div id="sticky-anchor-bottom"></div>
    </div>
    
   <?php include $footer_file;?>

	<script src="<?php echo SUBROOT;?>./js/jquery-1.12.3.min.js"></script>
	<script src="<?php echo SUBROOT;?>./js/main.js"></script>
    <!-- <script src="<?php echo SUBROOT;?>./js/sticky.js"></script> -->
</body>
</html>
