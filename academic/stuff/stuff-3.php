<!DOCTYPE html>
<html>
<?php 
	define('SUBROOT', '../../');
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
                    <img class="banner-img" alt="" style="background: url(<?php echo SUBROOT;?>./imgs/academic/stuff/stuff-3.png) no-repeat center;" src="<?php echo SUBROOT;?>./imgs/academic/stuff/stuff-3.png">
                </a>
            </li>
        </ul>
    </div>
	<!-- end flexslider -->

	<div class="content clear">
		<div class="main fl">
				
				<div class="article">
					<div class="des-center">
						<p class="title">【用研·案例】用户体验中你不曾知晓的秘密</p>
						<p>
							<span class="des-name">By DUNDUN Ideapad用户研究中心</span> |
							<span class="des-time">2016-06-01</span>
						</p>
						<p class="notation">
							“A good designer can organise chaos. A great designer can eliminatechaos.”设计应在回顾时才能被想起”
						</p>
						<p>
							作为设计师，学会全局纵览产品是很重要的。我并不是说在像素层面纠结无关紧要，但体验如果能好到让人都忘了视觉那会更棒。
						</p>
						<p>
							可用性和设计领域的专家Jared Spool举了个例子：Netflix曾向它的用户发送了一些问卷调查，内容时关于他们最喜欢其哪点。用户们的答案是：“好看的电影、推荐工具很有用、整体的服务很棒。”然而有一件事他们并没有提及，那就是网站拥有超丰富的功能以及直观且视觉优秀的界面。
						</p>
						<p>
							Jared Spool由此得出：<br>
							“这个结果正反映了Netflix设计师们每天勤奋地工作所得到的成效——他们没有被用户所提及……这并不是因为他们做的事不重要，恰恰相反，这是因为设计师们很好地完成了他们的工作：他们让设计隐形了。”
						</p>
						<p class="part tl">1、Airbnb——设计不只是绚烂的像素</p>
						<div class="image"><img src="<?php echo SUBROOT;?>./imgs/academic/stuff/stuff-3/1.png"></div>
						<p>
							当在Airbnb上预订住宿的时候，他们真正关心的是住家能否招待他们。Airbnb可能有数千个“可选的”地点，但如果没有任何一家愿意接待你——你的体验会是很糟糕的。
						</p>
						<p>那么Airbnb是如何快速引导你发现其真正的价值的呢？</p>
						<p>
							一切都是隐形的。在Airbnb上进行搜索很简单，表单也很简洁。当你进行搜索的时候，Airbnb在屏幕之后会使用机器学习（Machine Learning）来检测你对目的地的偏好。
						</p>
						<div class="image"><img src="<?php echo SUBROOT;?>./imgs/academic/stuff/stuff-3/2.png"></div>
						<p>
							说白了，他们创建了一个机器学习的模型来探测住家对于住宿请求的行为和偏好。这样他们就能对每位“客人”的搜索结果进行优化，优先显示那些更有可能接受请求的住家。这能让你在Airbnb上的体验更加有意义，因为于此你便非常有希望从一个住家那里快速成功地收到反馈。
						</p>
						<p class="part tl">2、迪士尼世界——顺畅奇幻的体验</p>
						<div class="image"><img src="<?php echo SUBROOT;?>./imgs/academic/stuff/stuff-3/3.png"></div>
						<p>
							“过去五年间，迪士尼耗资10亿美元，在全球所有的迪士尼乐园里建立一个用手环连接的智能系统。（这个系统的终端来自于为每个游客订制的Magical Wristband手环。迪士尼不仅把它看作是一张电子门票。它还是解锁酒店房门的钥匙，餐厅和纪念品商店购物时的信用卡。手环配有一个手机应用，可以管理你在乐园里游玩的计划路线、定位家人在园中的位置，可以防止父母和孩子走散。总之，Magical Wristband手环管理着你在童话世界里的身份和财富。这枚手环既可以在乐园的纪念品商店购买，也可以在入园前从官网预订。每只手环价格12.95美元，可以连续待机2年，只要拥有一只就可以逛不止一家迪士尼乐园。）”为什么？因为这能让他们通过隐形的设计创造出一个平滑、奇幻的体验。
						</p>
						<div class="image"><img src="<?php echo SUBROOT;?>./imgs/academic/stuff/stuff-3/4.png"></div>
						<p>
							从你在网上订票、挑选最喜欢的路线那一刻开始。他们会在屏幕之后捕捉所有你的信息。通过这些数据他们能摸透你的偏好，然后给你提供一个无需多走冤枉路、经过规划的路线。
						</p>
						<div class="image"><img src="<?php echo SUBROOT;?>./imgs/academic/stuff/stuff-3/5.png"></div>
						<p>
							这个隐形的设计同时能作用于你预订餐馆的时候。当你进行预约时，餐馆工作人员会提前知道你的名字。事实上，你可以坐在公园任意一处，而你的食物会神奇般地找到你！如何做到的？餐馆装备了先进的感应器。
						</p>
						<p>
							迪士尼世界知道你在他们神奇的主题公园里的位置，这还能创造更棒的体验。想象一下你的孩子不用再挤过拥挤的人群，最喜欢的卡通角色主动向他们走来的场景。
						</p>
						<div class="image"><img src="<?php echo SUBROOT;?>./imgs/academic/stuff/stuff-3/6.png"></div>
						<p>正如你所见，优秀的设计能带来绝佳的体验。</p>
						<p>
							从商业的立场来看，对线路进行优化同时能帮助人们探索公园里更多的受欢迎景点。当参观者在某条线路上花了更少的时间，也就意味着他们可以做更多的事，花更多的钱！
						</p>
						<p class="part tl">3、Nest——自我学习能力的调温器</p>
						<div class="image"><img src="<?php echo SUBROOT;?>./imgs/academic/stuff/stuff-3/7.png"></div>
						<p>
							目前市面上的调温器价格昂贵、操作复杂、表现低效。Tony Fadell注意到了这点，因此他创建了Nest。作为18代iPod和3代iPhone的设计师，他把他的经验应用到了一个“智能调温器”上。
						</p>
						<p>
							大多数人或许会以各种理由不去设置他们的调温器——对我来说这需要动手能力极强的人，而我恰好不是。Nest的团队却让整个体验变得绝佳，并让其近乎隐形。
						</p>
						<p>
							在安装的头七天里，调温器会学习你的偏好和个性化日程。它包含的一些特点有：<br>
							1 通过位置设置监测你的方位，当你不在家的时候切断电源。<br>
							2 在你回家之前重新打开，让你到家后能直接感受舒适。<br>
							3 Nest监测你的睡眠时间来关掉电源。 <br>
							4 Nest主张：你告诉它你的习惯，然后它会帮助你节能。
						</p>
						<div class="image"><img src="<?php echo SUBROOT;?>./imgs/academic/stuff/stuff-3/8.png"></div>
						<p>
							Nest之所以优秀是因为所有的行为都在屏幕之后发生。唯一需要用户做的就是在第一周设定温度。不需要纠结于不必要的UI元素。这也是Google愿意收购Nest的原因。
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
