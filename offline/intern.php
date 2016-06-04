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
            <a href="./intern-1.php">
                <img class="banner-img" alt="" style="background: url(<?php echo SUBROOT;?>./imgs/offline/intern/intern-1-small.png) no-repeat center;" src="<?php echo SUBROOT;?>./imgs/icons/alpha.png">
               </a>
            </li>
            <li>
            <a href="./intern-2.php">
                <img class="banner-img" alt="" style="background: url(<?php echo SUBROOT;?>./imgs/offline/intern/intern-2.png) no-repeat center;" src="<?php echo SUBROOT;?>./imgs/icons/alpha.png">
                </a>
            </li>
            <li>
            <a href="./intern-3.php">
                <img class="banner-img" alt="" style="background: url(<?php echo SUBROOT;?>./imgs/offline/intern/intern-3.png) no-repeat center;" src="<?php echo SUBROOT;?>./imgs/icons/alpha.png">
                </a>
            </li>
            <li>
            <a href="./intern-4.php">
                <img class="banner-img" alt="" style="background: url(<?php echo SUBROOT;?>./imgs/offline/intern/intern-4.png) no-repeat center;" src="<?php echo SUBROOT;?>./imgs/icons/alpha.png">
                </a>
            </li>
        </ul>
        <ul class="flex-direction-nav">
            <li><a class="flex-prev" href="javascript:;">Previous</a></li>
            <li><a class="flex-next" href="javascript:;">Next</a></li>
        </ul>
        <ol id="bannerCtrl" class="flex-control-nav flex-control-paging">
            <li><a>1</a></li>
            <li><a>2</a></li>
            <li><a>3</a></li>
        </ol>
    </div>
    
    
	<!-- end flexslider -->

	<div class="content clear">
		<div class="main fl">
			<h2>Latest Posts 最新发布</h2>
			<div class="main_wrap clear">
				<div class="section fl">
					<span>用研</span>
					<a href="./intern-1.php"><img src="<?php echo SUBROOT;?>./imgs/offline/intern/intern-1-thumbnail.png" alt=""></a>
				</div>
				<div class="description fr">
					<div class="des-center">
						<h3><a href="./intern-1.php">吴宇——硕士 新南威尔士大学 设计</a></h3>
						<p>
							<span class="des-name">Ranee</span> |
							<span class="des-time">1天前</span>
						</p>
						<p>2014年 第三届山东博物馆文化产品设计大赛 三等奖 </br>
第八届荷兰鹿特丹大学工业设计workshop 最佳奖 </br>
2015年 Excellent Design of 2015 Istituto Marangonl Competition for </br>
Shanghai Leading Art&Desgin University
						</p>
					</div>
				</div>
			</div>
			<div class="main_wrap clear">
				<div class="section fl">
				<span>用研</span>
					<a href="./intern-2.php"><img src="<?php echo SUBROOT;?>./imgs/offline/intern/intern-2-thumbnail.png" alt=""></a>
				</div>
				<div class="description fr">
					<div class="des-center">
						<h3><a href="./intern-2.php">梁怡雯——硕士 华东师范大学 心理与认知科学</a> </h3>
						<p>
							<span class="des-name">Cherise</span> |
							<span class="des-time">2天前</span>
						</p>
						<p>上海大学及华东师范大学优秀学生  </br>
华东师范大学“大夏杯”学术科技作品竞赛一等奖团队负责人
						</p>
					</div>
				</div>
			</div>
			<div class="main_wrap clear">
				<div class="section fl">
				<span>用研</span>
					<a href="./intern-3.php"><img src="<?php echo SUBROOT;?>./imgs/offline/intern/intern-3-thumbnail.png" alt=""></a>
				</div>
				<div class="description fr">
					<div class="des-center">
						<h3><a href="./intern-3.php">张汉雁——硕士 华东师范大学 </a></h3>
						<p>
							<span class="des-name">Hersey </span> |
							<span class="des-time">2天前</span>
						</p>
						<p>曾获上海市挑战杯大学生课外科技竞赛二等奖</br>
曾获华师大“大夏杯”大学生课外学术竞赛一等奖</br>
曾参加国家大学生创新实践项目《社会辅助决策软件的研究与实现》
						</p>
					</div>
				</div>
			</div>
			<div class="main_wrap clear">
				<div class="section fl">
				<span>用研</span>
					<a href="./intern-4.php"><img src="<?php echo SUBROOT;?>./imgs/offline/intern/intern-4-thumbnail.png" alt=""></a>
				</div>
				<div class="description fr">
					<div class="des-center">
						<h3><a href="./intern-4.php">姚远洋——硕士 中国美术学院 </a></h3>
						<p>
							<span class="des-name">Hersey </span> |
							<span class="des-time">2天前</span>
						</p>
						<p>参加美国芝加哥IHA创新设计大赛。</br>
参与编写《创意设计共性关键技术集成研发（国家科技支撑计划）》</br>
参加中国美术学院与香港科技大学合作的design thinking联合课程，并担任助教。
						</p>
					</div>
				</div>
			</div>
            <div class="main_wrap clear read-more-wrap">
            	<div class="read-more">
                <a href="javascript: void(0)">
                <span>浏览更多</span>
                <img src="<?php echo SUBROOT;?>./imgs/icons/more.png">
                </a>
                </div>
            </div>
		</div>
			
        <?php include (SUBROOT . 'hot-articles.php');?>
	</div>
    
    
	<?php include $footer_file;?>

   
</body>
	<!-- <script src="<?php echo SUBROOT;?>./js/sticky.js"></script> -->
	<script src="<?php echo SUBROOT;?>./js/jquery-1.12.3.min.js"></script>
	<script src="<?php echo SUBROOT;?>./js/main.js"></script>
</html>
