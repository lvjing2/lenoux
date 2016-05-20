<!DOCTYPE html>
<html>
<?php 
    define(SUBROOT, '../');
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
	<div id="product" class="product">
        <ul class="product-items">
            <li>
                <a title="" target="_blank" href="#">
                    <img  src="<?php echo SUBROOT;?>./imgs/research/product_imgs/img3.png">
                </a>
            </li>
            <li>
                <a title="" href="#">
                    <img  src="<?php echo SUBROOT;?>./imgs/research/product_imgs/img3-1.png">
                </a>
            </li>
            <li>
                <a title="" href="#">
                    <img  src="<?php echo SUBROOT;?>./imgs/research/product_imgs/img3-2.png">
                </a>
            </li>
			 <li>
                <a title="" href="#">
                    <img  src="<?php echo SUBROOT;?>./imgs/research/product_imgs/img3-3.png">
                </a>
            </li>
			<li>
                <a title="" href="#">
                    <img  src="<?php echo SUBROOT;?>./imgs/research/product_imgs/img3-4.png">
                </a>
            </li>
        </ul>

    </div>
	<!-- end flexslider -->

	<?php include $footer_file;?>

	<script src="<?php echo SUBROOT;?>./js/jquery-1.12.3.min.js"></script>
	<script src="<?php echo SUBROOT;?>./js/main.js"></script>
</body>
</html>
