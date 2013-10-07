<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>:::: COMPANY ::::</title>
<link href="<?php echo CSS_DIR?>setup.css" rel="stylesheet" type="text/css" />
<link href="<?php echo CSS_DIR?>style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="<?php echo JS_DIR?>jquery.min.js"></script>
<script type="text/javascript" src="<?php echo JS_DIR?>curvycorners.js"></script>
<script type="text/javascript" src="<?php echo JS_DIR?>library.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo CSS_DIR?>ddsmoothmenu.css">
<script type="text/javascript" src="<?php echo JS_DIR?>ddsmoothmenu.js"></script>
<script type="text/javascript">
ddsmoothmenu.init({
	mainmenuid: "smoothmenu1",
	orientation: 'h',
	classname: 'ddsmoothmenu',
	contentsource: "markup"
})
</script>

<link rel="stylesheet" href="<?php echo CSS_DIR?>global.css">
<script type="text/javascript" src="<?php echo JS_DIR?>slides.min.jquery.js"></script>
<script type="text/javascript">
$(function(){
			$('#slides').slides({
				effect: 'slide',
				play: 3000,
				pause: 5500,
				hoverPause: true,
				//generateNextPrev: true
			});

		});
</script>

</head>

<body>

<div class="site">

	<!-- header -->
	<div class="header"><div class="inHeader">
    	 <a href="#" class="logo"><img src="<?php echo IMG_DIR?>logo.png" /></a>
        <div id="smoothmenu1" class="ddsmoothmenu">
            <ul>
                <li><a href="#"><span>Trang chủ</span></a></li>
                <li><a href="#"><span>GIỚI THIỆU</span></a></li>
                <li><a href="#"><span>SẢN PHẨM</span></a>
                		<ul>
                      	<li><a href="#">SẢN PHẨM 1</a></li>
                         <li><a href="#">SẢN PHẨM 2</a></li>
                         <li><a href="#">SẢN PHẨM 3</a></li>
                         <li><a href="#">SẢN PHẨM 4</a></li>
                      </ul>
                </li>
                <li><a href="#"><span>TIN TỨC</span></a></li>
                <li><a href="#"><span>TƯ VẤN</span></a></li>
                <li><a href="#"><span>Liên Hệ</span></a></li>

            </ul>
        </div>

        <div class="clr"></div>
    </div></div>
	<!-- en header -->


	<!-- slide banner top -->
	<div class="bannerTop bannerSlidePro">
    	<div id="slides">
      		<div class="slides_container">
                <div class="slide"><img src="<?php echo IMG_DIR?>pic/bannerS1.jpg" /></div>
                <div class="slide"><img src="<?php echo IMG_DIR?>pic/bannerS1.jpg" /></div>
                <div class="slide"><img src="<?php echo IMG_DIR?>pic/bannerS1.jpg" /></div>
            </div>
        </div>
    </div>
    <!-- en slide banner top -->


    <!-- bodymain -->
	<div class="bodyMain">