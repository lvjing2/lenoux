<!DOCTYPE html>
<html>
	
<?php 
	define('SUBROOT', '../');
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
                    <img class="banner-img" alt="" style="background: url(<?php echo SUBROOT;?>./imgs/offline/intern/intern-4.png) no-repeat center;" src="<?php echo SUBROOT;?>./imgs/icons/alpha.png">
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
           		<p>姚远洋 <span class="motto">“不慌张，不犹豫”</span></p>
            </div>
				<div class="article">
					<div class="des-center">
						<p class="line-bold">院校</p>
                        <p class="intern-text">
                        中国美术学院</p>
                        <div class="intern-image"><img class="intern-figure" src="<?php echo SUBROOT;?>./imgs/offline/intern/intern-4.1.png"></div>
                    	<p class="line-bold">Lenovo实习时间</p>
                        <p class="intern-text">
							2014年4月—6月<br>
							参与yoga3评测
						</p>
                        <div class="intern-image"><img class="intern-figure" src="<?php echo SUBROOT;?>./imgs/offline/intern/intern-4.2.png"></div>
                        <p class="line-bold">重要经历</p>
                        <p class="intern-text">
                          2014年11月参加美国芝加哥IHA创新设计大赛。<br>
						   2014年9月—2016年4月参与编写《创意设计共性关键技术集成研发（国家科技支撑计划）》<br>
						   2015年6月—2015年7月赴香港参加中国美术学院与香港科技大学合作的design thinking联合课程，并担任助教。</p>
                        <div class="intern-image"><img class="intern-figure" src="<?php echo SUBROOT;?>./imgs/offline/intern/intern-4.3.png"></div>
						<p class="intern-text">
                        2015年9月—2016年3月赴意大利米兰理工大学交流学习，攻读design&engineer专业。<br>
						   2015年9月—2016年5月参与举办首届DIA中国设计智造大奖。</p>
                        <div class="intern-image"><img class="intern-figure" src="<?php echo SUBROOT;?>./imgs/offline/intern/intern-4.4.png"></div>
                        <p class="line-bold">个人爱好</p>
                        <p class="intern-text">
                          旅游、萌宠、美食、阅读</p>
                        <div class="intern-image"><img class="intern-figure" src="<?php echo SUBROOT;?>./imgs/offline/intern/intern-4.5.png"></div>
                        <p class="line-bold">社交媒体</p>
                        <p class="intern-text">
                          微博：@姚歪歪是只有卧蚕的猫<br>
   							微信：15068812188
                        </p>  
                  </div>
            </div>
		</div>
			
        <?php include (SUBROOT . 'hot-articles.php');?>
    </div>
    
   <?php include $footer_file;?>

	<script src="<?php echo SUBROOT;?>./js/jquery-1.12.3.min.js"></script>
	<script src="<?php echo SUBROOT;?>./js/main.js"></script>
    <!-- <script src="<?php echo SUBROOT;?>./js/sticky.js"></script> -->
</body>
</html>
