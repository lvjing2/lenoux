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
                    <img class="banner-img" alt="" style="background: url(<?php echo SUBROOT;?>./imgs/offline/intern/intern-2.png) no-repeat center;" src="<?php echo SUBROOT;?>./imgs/icons/alpha.png">
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
           		<p>梁怡雯</p>
            </div>
				<div class="article">
					<div class="des-center">
                        <p>院校<br>
                        华东师范大学 心理与认知科学学院</p>
                        <p>重要经历<br>
                          冷泉港(亚洲)-上海纽约大学计算神经科学暑期夏令营营员<br>
                          法国领事馆音乐节志愿者 <br>
                      华东师范大学“心理慰藉”志愿者</p>
                        <p>获奖经历<br>
                          上海大学及华东师范大学优秀学生 <br>
                          华东师范大学“大夏杯”学术科技作品竞赛一等奖团队负责人</p>
                        <p>个人爱好<br>
                          慢跑 写影评及段子</p>
                        <p>社交媒体<br>
                          豆瓣：guyue_liang<br>
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
