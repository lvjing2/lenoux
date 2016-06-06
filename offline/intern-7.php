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
                    <img class="banner-img" alt="" style="background: url(<?php echo SUBROOT;?>./imgs/offline/intern/intern-7.png) no-repeat center;" src="<?php echo SUBROOT;?>./imgs/icons/alpha.png">
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
           		<p>赵沁怡 <span class="motto">“Don’t get ready, get started!”</span></p>
            </div>
				<div class="article">
					<div class="des-center">
						<p class="line-bold">院校</p>
                        <p class="intern-text">
                        江南大学</p>
                        <div class="intern-image"><img class="intern-figure" src="<?php echo SUBROOT;?>./imgs/offline/intern/intern-7.1.png"></div>
                    	<p class="line-bold">Lenovo实习时间</p>
                        <p class="intern-text">
							2014年7月-9月 <br>
                            参与yaga3评测
						</p>
                        <div class="intern-image"><img class="intern-figure" src="<?php echo SUBROOT;?>./imgs/offline/intern/intern-7.2.png"></div>
                        <p class="line-bold">重要经历</p>
                        <p class="intern-text">
                          2011年9月-2012年1月 赴丹麦哥本哈根大学工程学院交流学习<br>
                            2014年3月 赴美参加圣荷西艺术联合中心美国拉波蒂船侬国际艺术节<br>
                            2014年9月-2015年9月 赴英国巴斯大学交流学习，获得创新与技术管理专业硕士学位<br>
                            现就读于山东大学设计学专业，属山东大学品牌与传播研究所</p>
                        <div class="intern-image"><img class="intern-figure" src="<?php echo SUBROOT;?>./imgs/offline/intern/intern-7.3.png"></div>
                        <p class="line-bold">个人爱好</p>
                        <p class="intern-text">
                          跑步、健身、美食、旅行</p>
                        <div class="intern-image"><img class="intern-figure" src="<?php echo SUBROOT;?>./imgs/offline/intern/intern-7.4.png"></div>
                        <p class="line-bold">社交媒体</p>
                        <p class="intern-text">
                          微信：kelly910730
                        </p>  
                        <p class="line-bold">正在建立一个关于设计研究的blog（欢迎围观哟~）</span> <br>
                        <p class="intern-text">
                            <a href="http://blindelephant.farbox.com/">http://blindelephant.farbox.com/</a>
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
