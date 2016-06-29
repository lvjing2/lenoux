<!DOCTYPE html>
<html>
<?php 
	define('SUBROOT', '../');
	include (SUBROOT . 'define.php');
?>
<head>
	<meta name="name" content="content" charset="utf-8">
	<title>基础产品介绍</title>
	<link rel="stylesheet" type="text/css" href="<?php echo SUBROOT;?>./css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo SUBROOT;?>./css/product-style.css">

</head>
<body>
	<?php include $header_file;?>

	<!-- start flexslider -->
	<div id="banner_tabs" class="flexslider">
        <ul class="slides">
            <li>
                <a title="" href="./product-1.php">
                    <img class="banner-img" alt="" style="background: url(<?php echo SUBROOT;?>./imgs/research/product/product-1.png) no-repeat center;" src="<?php echo SUBROOT;?>./imgs/icons/alpha.png">
                </a>
            </li>
        </ul>
        <ul class="flex-direction-nav">
            <li><a class="flex-prev" href="javascript:;">Previous</a></li>
            <li><a class="flex-next" href="javascript:;">Next</a></li>
        </ul>
        <ol id="bannerCtrl" class="flex-control-nav flex-control-paging">
            <li><a>1</a></li>
        </ol>
    </div>
	<!-- end flexslider -->

	<div class="content clear">
		<div class="main fl">
			<h2>Latest Posts 最新发布</h2>
			<div class="main_wrap clear">
				<div class="section fl">
					<span>用研</span>
					<img src="<?php echo SUBROOT;?>./imgs/research/product/product-thumbnail-1.png" alt="">
				</div>
				<div class="description fr">
					<div class="des-center">
						<h3><a href="./product-1.php">联想Y900——游戏，是一种态度</a></h3>
						<p>
							<span class="des-name">Ranee</span> |
							<span class="des-time">1天前</span>
						</p>
						<p>Y900：Born to Gaming  不羁的个性、狂野暴力是镌刻在游戏本骨子里的基因，联想Y900可以说是重新定义游戏本的一款产品，有机会给暂无明确标准的游戏本市场提供了一个行业标杆。	
						</p>
					</div>
				</div>
			</div>
			<div class="main_wrap clear">
				<div class="section fl">
				<span>用研</span>
					<img src="<?php echo SUBROOT;?>./imgs/index/news_img2.png" alt="">
				</div>
				<div class="description fr">
					<div class="des-center">
						<h3><a href="">Learn For User Experience </a> </h3>
						<p>
							<span class="des-name">Cherise</span> |
							<span class="des-time">2天前</span>
						</p>
						<p>情感在设计中占了多少比例？是先研究用户再设计产品？用户研究到底是什么？为什么也写了 本书叫《不止情愿设计》……	
						</p>
					</div>
				</div>
			</div>
			<div class="main_wrap clear">
				<div class="section fl">
				<span>用研</span>
					<img src="<?php echo SUBROOT;?>./imgs/index/news_img3.png" alt="">
				</div>
				<div class="description fr">
					<div class="des-center">
						<h3><a href="">Level Up to Expert</a></h3>
						<p>
							<span class="des-name">Hersey </span> |
							<span class="des-time">2天前</span>
						</p>
						<p>与提出用而概念的诺曼六师零距离接触，色彩分析，情感分析，用户建模。 寻找用户的痛点，解决那些没说出口的问题。你也许就是下一个大师。
						</p>
					</div>
				</div>
			</div>
			<div class="main_wrap clear">
				<div class="section fl">
				<span>用研</span>
					<img src="<?php echo SUBROOT;?>./imgs/index/news_img4.png" alt="">
				</div>
				<div class="description fr">
					<div class="des-center">
						<h3><a href="">联想用户研究实验室Lenovo User Experience Lab</a></h3>
						<p>
							<span class="des-name">Ranee</span> |
							<span class="des-time">3天前</span>
						</p>
						<p>基于实验心理学、工程心理学及人因神经学等学科知识，挖掘用户态度及用户行为的深层次冬季，对产品的设计与研发提供客观、量比且具有可操作性的支持。	
						</p>
					</div>
				</div>
			</div>
			<div class="main_wrap clear">
				<div class="section fl">
				<span>用研</span>
					<img src="<?php echo SUBROOT;?>./imgs/index/news_img5.png" alt="">
				</div>
				<div class="description fr">
					<div class="des-center">
						<h3><a href="">联想用户研究实验室Lenovo User Experience Lab</a></h3>
						<p>
							<span class="des-name">Ranee</span> |
							<span class="des-time">3天前</span>
						</p>
						<p>基于实验心理学、工程心理学及人因神经学等学科知识，挖掘用户态度及用户行为的深层次冬季，对产品的设计与研发提供客观、量比且具有可操作性的支持。	
						</p>
					</div>
				</div>
			</div>
		</div>
			
		<?php include (SUBROOT . 'hot-articles.php');?>
	</div>
	


<?php include $footer_file;?>

	<script src="<?php echo SUBROOT;?>./js/jquery-1.12.3.min.js"></script>
	<script src="<?php echo SUBROOT;?>./js/main.js"></script>
</body>
</html>
