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
           		<p>吴宇</p>
            </div>
				<div class="article">
					<div class="des-center">
                        <p>
院校</br> 
本科-东华大学 设计学院 工业设计 </br>   
硕士 新南威尔士大学 设计学院 设计
</p>
<p>

重要经历</br>
2014年 第三届山东博物馆文化产品设计大赛 三等奖 </br>
第八届荷兰鹿特丹大学工业设计workshop 最佳奖 </br>
2015年 Excellent Design of 2015 Istituto Marangonl</br>
            - Competition for Shanghai Leading Art&Desgin University </br>
"东方财富网“杯中国青年app大赛上海市赛区 创意类二等奖
</p>

<p>                      
奖学金  </br>       
2015年 东华大学学习优秀奖 </br>
东华大学社会工作优秀奖 </br>
东华大学 SAB伟星奖学金二等奖
</p>

<p>
电子竞技       </br>  
league of legends    第四赛季钻石五段 第五赛季钻石四段 第六赛季钻石一段
</p>

<p>
社交媒体</br>
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
