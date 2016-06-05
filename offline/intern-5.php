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
                    <img class="banner-img" alt="" style="background: url(<?php echo SUBROOT;?>./imgs/offline/intern/intern-5.png) no-repeat center;" src="<?php echo SUBROOT;?>./imgs/icons/alpha.png">
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
           		<p>罗心懿 <span class="motto">“是要无可替代”</span></p>
            </div>
				<div class="article">
					<div class="des-center">
						<p><span class="bold">院校</span><br>
                        中国美术学院</p>
                        <div class="intern-image"><img class="intern-figure" src="<?php echo SUBROOT;?>./imgs/offline/intern/intern-5.1.png"></div>
                    	<p><span class="bold">Lenovo实习时间</span><br>
							2014年10月—2015年4月<br>
							参与Y900游戏本开发
						</p>
                        <div class="intern-image"><img class="intern-figure" src="<?php echo SUBROOT;?>./imgs/offline/intern/intern-5.2.png"></div>
                        <p><span class="bold">重要经历</span><br>
                        2013年12月 上海市瑞霖杯工业设计大赛优秀奖 <br>
                        2015年5月  高露洁校企合作比赛银奖<br>
                        2015年7月  同济大学与荷兰代夫特理工大学联合举办交互工作坊<br>
                        2015年12月 上海市博物馆衍生大赛金奖<br>
                        2016年五月  毕业设计参与中国美术学院上海设计学院与浙江途尔车业校企合作项目<br>
                        2016年9月  即将就读中国美术学院设计艺术学院工业设计系人与休闲工作室</p>
                        <div class="intern-image"><img class="intern-figure" src="<?php echo SUBROOT;?>./imgs/offline/intern/intern-5.3.png"></div>
                        <p><span class="bold">个人爱好</span><br>
                          音乐，美食，旅游</p>
                        <div class="intern-image"><img class="intern-figure" src="<?php echo SUBROOT;?>./imgs/offline/intern/intern-5.4.png"></div>
                        <p><span class="bold">社交媒体</span><br>
   							微信：15502115676
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
