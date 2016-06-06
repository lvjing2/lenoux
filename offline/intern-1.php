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
                    <img class="banner-img" alt="" style="background: url(<?php echo SUBROOT;?>./imgs/offline/intern/intern-1-small.png) no-repeat center;" src="<?php echo SUBROOT;?>./imgs/icons/alpha.png">
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
           		<p>吴宇 <span class="motto">“能拖到明天的事，今天绝对不会做”</span></p>
            </div>
				<div class="article">
					<div class="des-center">
                        <p class="line-bold">院校</p>
                        <p class="intern-text">本科-东华大学 设计学院 工业设计 </br>
                                硕士 新南威尔士大学 设计学院 设计
                        </p>
                        <div class="intern-image"><img class="intern-figure" src="<?php echo SUBROOT;?>./imgs/offline/intern/intern-1.1.png"></div>
                        <p class="line-bold">重要经历</p>
                        <p class="intern-text">
                        2014年 第三届山东博物馆文化产品设计大赛 三等奖 </br>
                        第八届荷兰鹿特丹大学工业设计workshop 最佳奖 </br>
                        2015年 Excellent Design of 2015 Istituto Marangonl</br>
                                    - Competition for Shanghai Leading Art&Desgin University </br>
                        "东方财富网“杯中国青年app大赛上海市赛区 创意类二等奖
                        </p>
                        <div class="intern-image"><img class="intern-figure" src="<?php echo SUBROOT;?>./imgs/offline/intern/intern-1.2.png"></div>
                        <p class="line-bold">奖学金</p>
                        <p class="intern-text">
                        2015年 东华大学学习优秀奖 </br>
                        东华大学社会工作优秀奖 </br>
                        东华大学 SAB伟星奖学金二等奖
                        </p>
                        <div class="intern-image"><img class="intern-figure" src="<?php echo SUBROOT;?>./imgs/offline/intern/intern-1.3.png"></div>
                        <p class="line-bold">电子竞技</p>
                        <p  class="intern-text">
                        league of legends    第四赛季钻石五段 第五赛季钻石四段 第六赛季钻石一段
                        </p>
                        <div class="intern-image"><img class="intern-figure" src="<?php echo SUBROOT;?>./imgs/offline/intern/intern-1.4.png"></div>
                        <p class="line-bold">社交媒体</p>
                        <p  class="intern-text">
                        Wechat--aniaoci
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
