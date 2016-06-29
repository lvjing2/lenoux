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
	<link rel="stylesheet" type="text/css" href="<?php echo SUBROOT;?>./css/we-want-you.css">
    
</head>
<body>
	<?php include $header_file;?>

	<!-- start flexslider -->
	<div id="banner_tabs" class="flexslider">
        <ul class="slides">
            <li>
                    <img class="banner-img" alt="" style="background: url(<?php echo SUBROOT;?>./imgs/offline/banner-1.png) no-repeat center;" src="<?php echo SUBROOT;?>./imgs/icons/alpha.png">
                <div id="jd-text-on-img" class="wrapper-text-on-img clear">
            		<div class="clear img-on-img">
                        <div style="margin-left: 50px;">
                            <img alt="" src="<?php echo SUBROOT;?>./imgs/offline/jd-1-small.png">
                        </div>
                    </div>
                </div>
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
           		<p>用研助理1名</p>
            </div>
                	
                
				<div id="jd1-article" class="article">
					<div class="des-center des-jd">
                        <ol>
                            <li><span class="title-1">工作内容描述：</span>
                            <ul>
                                <li>产品评估：了解产品研发流程，在研发各阶段，协助完成调研问卷设计或用
       户测试场景设计，进行用户访谈或执行测试，观察用户对产品的使用过程，
       发现痛点，对产品可用性提出改进建议；</li>
                                <li>众测系统维护：和用户直接沟通，收集相关使用数据及反馈，统计、分析将
   用户需求反馈给研发；</li>
                                <li>用户分析：了解用户相关信息，定义用户对产品的典型使用场景、行为，挖
   掘用户对产品的可用性需求，构建典型用户形象；</li>
   								<li>协助完成各项报告（中英文）；</li>
                            </ul>
                            
                            </li>
                            <li><span class="title-1">职位要求：（学历、专业不限，有下列属性即可）</span>
                            
                            <ul>
                                <li>态度认真，有责任心，思维缜密，注重细节；</li>
                                <li>每周工作至少3天以上，实习期至少6个月；</li>
                                <li>善于编写结构化问卷及实验设计，熟悉访谈流程，有一定访谈经验，能双语访谈为佳（中英）；</li>
   								<li>熟练掌握Office，双语撰写PPT报告为佳；</li>
                                <li>有较强的数据统计、分析能力，熟练掌握Excel数据透视表，SPSS等为佳；</li>
                                <li>对消费电子产品有浓厚的兴趣和独特见解；</li>
                                <li>善于学习和接受新鲜实物，具有团队合作精神；</li>
                            </ul>
                            </li>
                        </ol>
                        
						<p>
                            备注：
                            有意向者请将简历及作品集发至邮箱：wangqian15@lenovo.com；
                            简历和作品集的文件大小请控制在20M以内。
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
