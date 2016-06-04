<!DOCTYPE html>
<html>
<?php 
	define(SUBROOT, '../../');
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
                <a title="" href="#">
                    <img class="banner-img" alt="" style="background: url(<?php echo SUBROOT;?>./imgs/academic/stuff/stuff-4.png) no-repeat center;" src="<?php echo SUBROOT;?>./imgs/academic/stuff/stuff-4.png">
                </a>
            </li>
        </ul>
    </div>
	<!-- end flexslider -->

	<div class="content clear">
		<div class="main fl">
				
				<div class="article">
					<div class="des-center">
						<p class="title">【用研·方法】用研都是如何评估产品的——专家评估篇</p>
						<p>
							<span class="des-name">By DUNDUN Ideapad用户研究中心</span> |
							<span class="des-time">2016-06-01</span>
						</p>
						<div class="image"><img src="<?php echo SUBROOT;?>./imgs/academic/stuff/stuff-4/1.png"></div>
						<p class="part tl">为何要做？</p>
						<p>首先，为什么会有评估任务落到用户研究同事身上?</p>
						<p>
							因为很多时候，由于时间或专业度方面的原因，项目内的人对自己制作的产品要服务的目标用户其实缺少一个正确的认知，对用户如何看待现有的产品无法清晰的了解，有种“不识庐山真面目，只缘身在此山中”的感觉。那种“啊我也是用户啊我觉得XX..."的人，安抚下就好：
						</p>
						<p class="notation">
							那么这个时候，用户研究的工作目标就是，通过专家评估的方式，按照一般用户的使用流程，发现问题，并以一种易于理解和实践的方式提供给项目内的人理解，进而影响或转变产品后续的规划方向。
						</p>
						<p>
							当然这种工作的来源多是某个产品找上门“哎呀我觉得最近我们的XX不是很对劲，能不能麻烦你们给我们做个评估OOXX....”
						</p>
						<p class="part tl ">
							开始干活
						</p>
						<div class="image"><img src="<?php echo SUBROOT;?>./imgs/academic/stuff/stuff-4/2.png"></div>
						<p>
							在做评估前，需要和需求方(主要是产品 or 运营，偶尔也会有来自研发的)确认内容，希望获得的评估结果以及要用评估结果做什么事情。比如后期的规划方向，网站改版方向等。
						</p>
						<p class="part tl">
							在了解清楚之后，就可以制定一个可行的计划。
						</p>
						<p>
							进行用户使用流程的梳理，假设自己是一名用户，会在什么情景下使用这个产品/功能，来达到什么目的，过程中每一个点可能给自己带来感受的变化。这时候可以尽量化身几个不同的用户，以达到完整使用了功能的方方面面。有时候为了避免自己深陷其中，也可以找一些用户 or 同事来进行询问什么情况下会遇到这样的问题，都是怎么解决的，综合自己的尝试，来做整体的梳理。形成类似下图的架构：
						</p>
						<p class="part tl">
							一个完整的用户使用功能的流程
						</p>
						<div class="image"><img src="<?php echo SUBROOT;?>./imgs/academic/stuff/stuff-4/3.png"></div>
						<p>
							为了不被刚接触的功能模块死死的套牢，需要在平时多熟悉自家公司的产品和竞品，能够清楚的知道需要评估模块与产品中其他模块以及与整个产品之前的联系。另外还需要对“用户对功能的认知”有一个清晰合理的预判，随便举个不一定恰当例子，现在各个APP都有主题，那么，在用户对你产品的认知中，“夜间模式”是单独的一个状态还是主题之一?
						</p>
						<p class="part tl">
							你需要别人的帮助
						</p>
						<div class="image"><img src="<?php echo SUBROOT;?>./imgs/academic/stuff/stuff-4/4.png"></div>
						<p>
							找上别的同事来一起帮忙看吧!用研、交互、设计、甚至提需求的产品运营都会有不同的看法，这是可以集思广益的时候。
						</p>
						<p>
							平时如果有把用户反馈集中起来，分门别类的存储、打标签在这种时候就会非常方便。
						</p>
						<p>
							尝试和需求方要求提供一些能想到的数据，沉默的用户永远是大多数，让数据替他们回答的问题。
						</p>
						<p>
							擅用工具，录视频、excel是很好的方式，spss多用于定量的分析上。
						</p>
						<p class="part tl">
							判断问题的准线
						</p>
						<div class="image"><img src="<?php echo SUBROOT;?>./imgs/academic/stuff/stuff-4/5.png"></div>
						<p>
							需要一些既定的标准，才能帮助发现问题，这里我不多说了，反推交互的流程、可用、易用、高效、视觉呈现等标准。刚开始需要广泛的了解各种原则，并以此指导自己在评估的过程中去发现问题，久而久之就会变成下意识的判断，然后拿到新东西的时候下意识找缺点就更加坐实我处女座的属性，汗。
						</p>
						<p class="part tl">
							工欲善其事，必先利其器
						</p>
						<div class="image"><img src="<?php echo SUBROOT;?>./imgs/academic/stuff/stuff-4/6.png"></div>
						<p>
							只放图不用解释，快速讨论与记录用思维导图，excel统计整理结果后其实就可以与需求方进行讨论讲解，需要图形表达或者对大范围项目成员或者boss做宣讲，就上ppt吧。
						</p>
						<p>
							基于现在移动互联网的快速迭代风潮，尽快到达可以直观的查看结果和讨论的程度即可。
						</p>
						<p>
							以上即为用研在日常工作中的一小部分，水很深呐。顺道为了更好的拓宽自己的视野，还翻了写心理学的书，很有意思，推荐能看到这篇文的人有空找来看看，书单的话找找知乎、豆瓣都有，取所需即可。
						</p>
                </div>
            </div>
		</div>
			
        <?php include (SUBROOT . 'hot-articles.php');?>
        <?php include 'may-also-like.php';?>
    </div>
    
    
	
<?php include $footer_file;?>

	<script src="<?php echo SUBROOT;?>./js/jquery-1.12.3.min.js"></script>
	<script src="<?php echo SUBROOT;?>./js/main.js"></script>
    <!-- <script src="<?php echo SUBROOT;?>./js/sticky.js"></script> -->
</body>
</html>
