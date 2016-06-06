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
                    <img class="banner-img" alt="" style="background: url(<?php echo SUBROOT;?>./imgs/offline/intern/intern-3.png) no-repeat center;" src="<?php echo SUBROOT;?>./imgs/icons/alpha.png">
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
           		<p>张汉雁 <span class="motto">“Tomorrow is another day”</span></p>
            </div>
				<div class="article">
					<div class="des-center">
					             <p class="line-bold">院校</p>
                       <p class="intern-text">
                        华东师范大学
                        </p>
                        <div class="intern-image"><img class="intern-figure" src="<?php echo SUBROOT;?>./imgs/offline/intern/intern-3.1.png"></div>
                        <p class="line-bold">Lenovo实习时间</p>
                        <p class="intern-text">
                          2015年10月—2016年5月
                        </p>
                        <div class="intern-image"><img class="intern-figure" src="<?php echo SUBROOT;?>./imgs/offline/intern/intern-3.2.png"></div>
                        <p class="line-bold">参与项目</p>
                        <p class="intern-text">
                        Miix 700 sticker position research<br>
                        310S beta test<br>
                        Touchpad UE evaluation<br>
                        Gaming day evens<br>
                        Miix activity pen UE research<br>
                        Boot time UE evaluation<br>
                        Magnetic force UE evaluation research<br>
                        Assertive display UE research<br>
                        Big data prediction model research
                        </p>
                        <div class="intern-image"><img class="intern-figure" src="<?php echo SUBROOT;?>./imgs/offline/intern/intern-3.3.png"></div>
                        <p class="line-bold">重要经历</p>
                        <p class="intern-text">
                          2014年3月至2015年9月参与国家大学生创新项目《多值定性比较分析工具的研究与实现》<br>
                          2014年9月至2015年6月参与《具备逻辑化建及反设分析的多值定性比较分析工具》项目并获上海市课外学术作品竞赛二等奖。<br>
                          2015年3月至2015年7月 担任华东师范大学国际交流处助理管理员<br>
                          2015年8月至2015年10月 担任华东师范大学信息办助理管理员<br>
                          2016年6月 担任中国浙江投资贸易洽谈会志愿者</p>
                        <div class="intern-image"><img class="intern-figure" src="<?php echo SUBROOT;?>./imgs/offline/intern/intern-3.4.png"></div>
                        <p class="line-bold">个人爱好</p>
                        <p class="intern-text">
                          吃吃吃、浪浪浪、拍拍拍</p>
                        <p class="line-bold">社交媒体</p>
                        <p class="intern-text">
                          微信：18801773913 <br>
                          微博：@肥硕小duangduang
                        </p>
                  </div>
            </div>
		</div>
			
        <?php include (SUBROOT . 'hot-articles.php');?>
    	<div id="sticky-anchor-bottom"></div>
    </div>
    
   <?php include $footer_file;?>

	<script src="<?php echo SUBROOT;?>./js/jquery-1.12.3.min.js"></script>
	<script src="<?php echo SUBROOT;?>./js/main.js"></script>
    <!-- <script src="<?php echo SUBROOT;?>./js/sticky.js"></script> -->
</body>
</html>
