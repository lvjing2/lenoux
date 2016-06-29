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
                    <img class="banner-img" alt="" style="background: url(<?php echo SUBROOT;?>./imgs/offline/intern/intern-6.png) no-repeat center;" src="<?php echo SUBROOT;?>./imgs/icons/alpha.png">
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
           		<p>韩牧云 <span class="motto">“stay hungry”</span></p>
            </div>
				<div class="article">
					<div class="des-center">
						<p class="line-bold">院校</p>
                        <p class="intern-text">
                        中国美术学院</p>
                        <div class="intern-image"><img class="intern-figure" src="<?php echo SUBROOT;?>./imgs/offline/intern/intern-6.1.png"></div>
                    	<p class="line-bold">Lenovo实习时间</p>
                        <p class="intern-text">
							2016年4月—6月 <br>
                            参与yoga510评测y900评测<br>
                            实验室文化建设宣传册
						</p>
                        <div class="intern-image"><img class="intern-figure" src="<?php echo SUBROOT;?>./imgs/offline/intern/intern-6.2.png"></div>
                        <p class="line-bold">重要经历</p>
                        <p class="intern-text">
                        2013年11月参与浦东青年杂志编辑<br>
                        2014年5月参与举办上海新锐青年设计展<br>
                        2014年9-2015年3月在上海博砚建筑事务所实习<br>
                        2015年6月毕业于中国美术学院上海设计学院<br>
                        2015年6月获得中国美术学院上海设计学院毕业设计金奖</p>
                        <div class="intern-image"><img class="intern-figure" src="<?php echo SUBROOT;?>./imgs/offline/intern/intern-6.3.png"></div>
                        <p class="line-bold">个人爱好</p>
                        <p class="intern-text">
                          美食，美食，美食</p>
                        <div class="intern-image"><img class="intern-figure" src="<?php echo SUBROOT;?>./imgs/offline/intern/intern-6.4.png"></div>
                        <p class="line-bold">社交媒体</p>
                        <p class="intern-text">
                          微博：不牧之云
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
