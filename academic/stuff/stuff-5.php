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
                    <img class="banner-img" alt="" style="background: url(<?php echo SUBROOT;?>./imgs/academic/stuff/stuff-5.png) no-repeat center;" src="<?php echo SUBROOT;?>./imgs/academic/stuff/stuff-5.png">
                </a>
            </li>
        </ul>
    </div>
	<!-- end flexslider -->

	<div class="content clear">
		<div class="main fl">
				
				<div class="article">
					<div class="des-center">
						<p class="title">【分析】如何通过用户行为路径分析提高转化率？</p>
						<p>
							<span class="des-name">By DUNDUN Ideapad用户研究中心</span> |
							<span class="des-time">2016-06-01</span>
						</p>
						<p>
							用户行为路径分析是互联网行业特有的一类数据分析方法，它主要根据每位用户在App或网站中的点击行为日志，分析用户在App或网站中各个模块的流转规律与特点，挖掘用户的访问或点击模式，进而实现一些特定的业务用途，如App核心模块的到达率提升、特定用户群体的主流路径提取与浏览特征刻画，App产品设计的优化与改版等。
						</p>
						<p>
							本文会对用户行为路径分析方法作一些简单的探讨，更多的偏向于一些路径分析业务场景与技术手段的介绍，起到抛砖引玉的作用，欢迎致力于互联网数据分析的朋友们拍砖与批评。以后有机会可以继续介绍分享与实际业务结合较多的用户行为路径分析案例。
						</p>
						<p class="part">
							路径分析业务场景
						</p>
						<p>
							用户行为路径分析的一个重要终极目的便是优化与提升关键模块的转化率，使得用户可以便捷地依照产品设计的期望主流路径直达核心模块。具体在分析过程中还存在着以下的应用场景：
						</p>
						<p class="part tl">
							1、用户典型路径识别与用户特征分析
						</p>
						<p>
							用户特征分析中常常使用的都是一些如性别、地域等人口统计数据或订单价、订单数等运营数据，用户访问路径数据为我们了解用户特征打开了另一扇大门。例如对于一款图片制作上传分享的应用，我们可以通过用户的App使用操作数据，来划分出乐于制作上传的创作型用户，乐于点赞评论的互动型用户，默默浏览看图的潜水型用户，以及从不上传只会下载图片的消费型用户。
						</p>
						<p class="part tl">
							2、产品设计的优化与改进
						</p>
						<p>
							路径分析对产品设计的优化与改进有着很大的帮助，可以用于监测与优化期望用户路径中各模块的转化率，也可以发现某些冷僻的功能点。一款视频创作分享型App应用中，从开始拍摄制作视频到视频的最终发布过程中，用户往往会进行一系列的剪辑操作；通过路径分析，我们可以清晰的看到哪些是用户熟知并喜爱的编辑工具，哪些操作过于冗长繁琐，这样可以帮助我们针对性地改进剪辑操作模块，优化用户体验。如果在路径分析过程中用户的创作数量与用户被点赞、评论以及分享的行为密切相关，就可以考虑增强这款App的社交性，增强用户黏性与创作欲望。
						</p>
						<p class="part tl">
							3、产品运营过程的监控
						</p>
						<p>
							产品关键模块的转化率本身即是一项很重要的产品运营指标，通过路径分析来监测与验证相应的运营活动结果，可以方便相关人员认识了解运营活动效果。
						</p>
						<p class="part">
							路径分析数据获取
						</p>
						<p>
							互联网行业对数据的获取有着得天独厚的优势，路径分析所依赖的数据主要就是服务器中的日志数据。用户在使用App过程中的每一步都可以被记录下来，这时候需要关注的便是优秀的布点策略，它应当与我们所关心的业务息息相关。
						</p>
						<p>
							这里可以推荐一下诸葛io，一款基于用户洞察的精细化运营分析工具。将诸葛io的SDK集成到App或网站中，便能获得应用内的所有用户行为数据。事实上，诸葛io认为在每个App里，不是所有事件都有着同样的价值，基于对核心事件的深度分析需求，诸葛io推荐大家使用层级化的自定义事件布点方式，每一个事件由三个层次组成的：事件(Event)、属性(Key)和属性值(Value)。同时，诸葛io还为开发者们提供数据监测布点咨询服务，可以根据丰富的行业经验为客户提供个性化的事件布点咨询和技术支持。
						</p>
						<p class="part">
							漏斗模型与路径分析的关系
						</p>
						<p>
							以上提到的路径分析与我们较为熟知的漏斗模型有相似之处，广义上说，漏斗模型可以看作是路径分析中的一种特殊情况，是针对少数人为特定模块与事件节点的路径分析。
						</p>
						<p>
							漏斗模型通常是对用户在网站或App中一系列关键节点的转化率的描述，这些关键节点往往是我们人为指定的。例如我们可以看到某购物App应用的购买行为在诸葛io中的漏斗转化情况。这款购物App平台上，买家从浏览到支付成功经历了4个关键节点，商品浏览、加入购物车、结算、付款成功，从步骤1到步骤4，经历了其关键节点的人群越来越少，节点的转化率呈现出一个漏斗状的情形，我们可以针对各个环节的转化效率、运营效果及过程进行监控和管理，对于转化率较低的环节进行针对性的深入分析与改进。其他的漏斗模型分析场景可以根据业务需求灵活运用，诸葛io平台中拥有十分强大的漏斗分析工具，是您充分发挥自己对于数据的想象力的平台，欢迎参看一个基于漏斗模型的分析案例《漏斗/留存新玩儿法》。
						</p>
						<div class="image"><img src="<?php echo SUBROOT;?>./imgs/academic/stuff/stuff-5/1.png"></div>
						<p>
							路径分析与漏斗模型存在不同之处，它通常是对每一个用户的每一个行为路径进行跟踪与记录，在此基础上分析挖掘用户路径行为特点，涉及到每一步的来源与去向、每一步的转化率。可以说，漏斗模型是事先的、人为的、主动的设定了若干个关键事件节点路径，而路径分析是探索性的去挖掘整体的行为路径，找出用户的主流路径，甚至可能发现某些事先不为人知的有趣的模式路径。从技术手段上来看，漏斗模型简单直观计算并展示出相关的转化率，路径分析会涉及到一些更为广泛的层面。
						</p>
						<p class="part">
							路径分析常见思路与方法
						</p>
						<p class="part tl">
							1、朴素的遍历统计与可视化分析探索
						</p>
						<p>
							通过解析布点获得的用户行为路径数据，我们可以用最简单与直接的方式将每个用户的事件路径点击流数据进行统计，并用数据可视化方法将其直观地呈现出来。D3.js是当前最流行的数据可视化库之一，我们可以利用其中的Sunburst Partition来刻画用户群体的事件路径点击状况。从该图的圆心出发，层层向外推进，代表了用户从开始使用产品到离开的整个行为统计；sunburst事件路径图可以快速定位用户的主流使用路径。通过提取特定人群或特定模块之间的路径数据，并使用sunburst事件路径图进行分析，可以定位到更深层次的问题。灵活使用sunburst路径统计图，是我们在路径分析中的一大法宝。
						</p>
						<p>
							诸葛io不仅能够便捷获取布点数据，也为客户提供了个性化的sunburst事件路径图分析，并可为客户产品制作定制化的产品分析报告。
						</p>
						<div class="image"><img src="<?php echo SUBROOT;?>./imgs/academic/stuff/stuff-5/2.png"></div>
						<p class="part tl">
							2、基于关联分析的序列路径挖掘方法
						</p>
						<p>
							提到关联规则分析，必然免不了数据挖掘中的经典案例“啤酒与尿布”。暂且不论“啤酒与尿布”是不是Teradata的一位经理胡编乱造吹嘘出来的“神话故事”，这个案例在一定程度上让人们理解与懂得了购物篮分析（关联分析）的流程以及背后所带来的业务价值。将超市的每个客户一次购买的所有商品看成一个购物篮，运用关联规则算法分析这些存储在数据库中的购买行为数据，即购物篮分析，发现10%的顾客同事购买了尿布与啤酒，且在所有购买了尿布的顾客中，70%的人同时购买了啤酒。于是超市决定将啤酒与尿布摆放在一起，结果明显提升了销售额。
						</p>
						<p>
							我们在此不妨将每个用户每次使用App时操作所有事件点看成“购物篮”中的“一系列商品”，与上面提到的购物篮不同的是，这里的所有事件点击行为都是存在严格的前后事件顺序的。我们可以通过改进关联规则中的Apriori或FP-Growth算法，使其可以挖掘存在严格先后顺序的频繁用户行为路径，不失为一种重要的用户路径分析思路。我们可以仔细考量发掘出来的规则序列路径所体现的产品业务逻辑，也可以比较分析不同用户群体之间的规则序列路径。
						</p>
						<p class="part tl">
							3、社会网络分析（或链接分析）
						</p>
						<p>
							早期的搜索引擎主要基于检索网页内容与用户查询的相似性或者通过查找搜索引擎中被索引过的页面为用户查找相关的网页，随着90年代中后期互联网网页数量的爆炸式增长，早期的策略不再有效，无法对大量的相似网页给出合理的排序搜索结果。现今的搜索引擎巨头如Google、百度都采用了基于链接分析的搜索引擎算法来作为这个问题解决方法之一。
						</p>
						<p>
							网页与网页之间通过超链接结合在一起，如同微博上的社交网络通过关注行为连接起来，社交网络中有影响力很大的知名权威大V们，互联网上也存在着重要性或权威性很高的网页。将权威性较高的网页提供到搜索引擎结果的前面，使得搜索的效果更佳。
						</p>
						<p>
							我们将社交网络中的人看作一个个节点，将互联网中的网页看作一个个节点，甚至可以将我们的App产品中的每一个模块事件看作一个个节点，节点与节点之间通过各自的方式连接组成了一个特定的网络图，以下将基于这些网络结构的分析方法统称为社会网络分析。
						</p>
						<p>
							社会网络分析中存在一些较为常见的分析方法可以运用到我们的路径分析中来，如节点的中心性分析，节点的影响力建模，社区发现等。通过中心性分析，我们可以去探索哪些模块事件处于中心地位，或者作为枢纽连接了两大类模块事件，或者成为大多数模块事件的最终到达目的地。通过社区发现，我们可以去探索这个社会网络中是否存在一些“小圈子”，即用户总是喜欢去操作的一小部分行为路径，而该部分路径又与其他大部分模块相对独立。
						</p>
						<p>
							以上为笔者在诸葛io团队中，对各类产品进行用户行为路径分析的总结与思考，一些工作仍在不断地探索过程中，希望大家不吝赐教。今后有机会可能会以案例方式分享如何做用户路径分析，展示分析过程中的步骤与思路，希望能和大家多多交流。
						</p>
						<p><a href="#">【转自    UXRen】</a></p> 
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
