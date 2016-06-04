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
           		<p>张汉雁</p>
            </div>
				<div class="article">
					<div class="des-center">
					  <p>院校<br>
                        华东师范大学</p>
                        <p>重要经历<br>
                          曾获上海市挑战杯大学生课外科技竞赛二等奖<br>
                          曾获华师大“大夏杯”大学生课外学术竞赛一等奖<br>
                          曾参加国家大学生创新实践项目《社会辅助决策软件的研究与实现》<br>
                      曾参加阿里巴巴“小鱼治水——清源洁水行动”</p>
                        <p>个人爱好<br>
                          电影、美食、被摄影</p>
                        <p>社交媒体<br>
                          微博：@肥硕小duangduang<br>
                          微信：cici_dun<br>
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
