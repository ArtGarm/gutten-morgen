<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta id="viewport" name="viewport" content="width=960, user-scalable=no">
	<title></title>

	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

	<link rel="stylesheet" type="text/css" href="css/reset.css" media="all" />

	<link rel="stylesheet" href="css/bootstrap.css" media="all" />
	<link rel="stylesheet" href="css/bootstrap-theme.css" media="all" />

	<link rel="stylesheet" type="text/css" href="css/style.css" media="all" />

	<link rel="stylesheet" href="css/tuesdayAnimate.css" media='all' />
	<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic&subset=cyrillic' rel='stylesheet' type='text/css'>

	<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>

	<!-- bootstrap -->

	<script src="js/bootstrap.js" type="text/javascript"></script>

	<!-- /bootstrap -->

	<script src="js/selectivizr-min.js" type="text/javascript"></script>

	<link rel="stylesheet" type="text/css" href="css/jquery.znice.css" media="all" />
	<script src="js/jquery.validate.min.js" type="text/javascript"></script>
	<!--<script src="js/jquery.znice.validate.js" type="text/javascript"></script>
	<script src="js/jquery.znice.js" type="text/javascript"></script>-->

	<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox.css" media="all" />
	<script src="fancybox/jquery.fancybox.js" type="text/javascript"></script>

	<script src="js/modernizr.js" type="text/javascript"></script>
	<script src="js/jquery.watermark.min.js" type="text/javascript"></script>

<!-- mask for inputs -->

	<script src="js/maskInput.js" type="text/javascript"></script>

<!-- /mask for inputs -->

<!-- sliders -->
	<link rel="stylesheet" type="text/css" href="css/slick.css" media="all" />
	<script src="js/slick.js" type="text/javascript"></script>
<!-- sliders -->

<!-- jScrollPane -->
	<link type="text/css" href="css/jquery.jscrollpane.css" rel="stylesheet" media="all" />
	<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
	<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
<!-- jScrollPane -->

<!-- jandexMaps -->
	<style>
		.map1{width: 100%;height: 350px;}
		.mapes{height: 350px;margin-bottom: 15px;}
		.list{width: 200px;float: left;}
		.list-item.hover{background-color: red;}
		.checkboxes{float: right;margin-right: 10px;}
		.checkboxes label{display: inline-block;margin-right: 10px;}
		.clear{clear: both;}
	</style>

	<script src="http://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
	<script src="js/jandexMapsScr.js" type="text/javascript"></script>
<!-- jandexMaps -->

<!-- remove Files -->
	<!--<script src="js/myalert.js" type="text/javascript"></script>
	<script src="develop/autocssrenew.js" type="text/javascript"></script>-->

    <script src="js/develop_2.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="css/develop_2.css" media="all" />

    <script src="js/develop_3.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="css/develop_3.css" media="all" />

    <script src="js/develop_4.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="css/develop_4.css" media="all" />

    <script src="js/develop_5.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="css/develop_5.css" media="all" />
<!-- remove Files -->

	<link rel="stylesheet" href="css/style_main.css" media="all" />
	<script src="js/scr.js" type="text/javascript"></script>

	<!--[if lt IE 9]>
		<script>
		document.createElement('header');
		document.createElement('nav');
		document.createElement('section');
		document.createElement('article');
		document.createElement('aside');
		document.createElement('footer');
		document.createElement('time');
		</script>
		<script src="js/pie.js" type="text/javascript"></script>
	<![endif]-->

	<!--[if lt IE 8]><script src="js/oldie/warning.js"></script><script>window.onload=function(){e("js/oldie/")}</script><![endif]-->
</head>
<body>
	<?partial('zHiddenBlock');?>
	<header class="header">

		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-md-offset-3">
						<nav class="navigation">
							<ul class="text-center">
								<li><a href="#">Услуги</a></li>
								<li><a href="#">Отзывы</a></li>
								<li><a href="#">О компании</a></li>
								<li><a href="#">Контакты</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<div class="header-middle">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="logo">
							<a href="#">
								<img src="images/header-logo.png"  alt="">
							</a>
						</div>
					</div>
					<div class="col-md-6 col-md-offset-2 cfix">
						<div class="header-tel">
							<a href="tel:84997071207">
								<span>8(499)<b>707-12-07</b></span>
							</a>
						</div>
						<div class="header-zvonok">
							<a href="#call-popup" class="button-a fancybox_popup">
								<span>Заказать звонок</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="header-bottom">
			<?php if($act == "anil"){
				partial('anilHeaded');
			 }
			 if($act == "flec"){
				partial('flecHeaded');
			 }

			if($act == "index" || $act == "none"){
				partial('sliderHeaded');
			}


			if($act == "poli"){
				partial('poliHeaded');
			} ?>



		</div>

	</header>