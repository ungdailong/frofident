<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>:::: <?php echo $_SESSION['title']?> ::::</title>
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
<script type="text/javascript" src="<?php echo JS_DIR?>fancybox/jquery.mousewheel-3.0.2.pack.js"></script>
<script type="text/javascript" src="<?php echo JS_DIR?>fancybox/jquery.fancybox-1.3.1.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo JS_DIR?>fancybox/jquery.fancybox-1.3.1.css" media="screen" />

<script type="text/javascript">
		$(document).ready(function() {


			$("#various1").fancybox({
				'titlePosition'		: 'inside',
				'transitionIn'		: 'none',
				'transitionOut'		: 'none'
			});

		});
	</script>
</head>

<body>

<div class="site">

	<!-- header -->
	<div class="header"><div class="inHeader">
    	 <a href="<?php echo WEB_ROOT?>" class="logo"><img src="<?php echo IMG_DIR?>logo.png" /></a>
        <div id="smoothmenu1" class="ddsmoothmenu">
            <ul>
                <li><a  <?php if($_SESSION['path'] == 'home') echo "class='active'" ?> href="<?php echo WEB_ROOT?>"><span>Trang chủ</span></a></li>
                <li><a  <?php if($_SESSION['path'] == 'gioithieu') echo "class='active'" ?>href="<?php echo WEB_ROOT?>/gioi-thieu"><span>GIỚI THIỆU</span></a></li>
                <li><a  <?php if($_SESSION['path'] == 'sanpham') echo "class='active'" ?>href="<?php echo WEB_ROOT?>/san-pham"><span>SẢN PHẨM</span></a>
                		<ul>
                		<?php foreach ($GLOBALS['productCategory'] as $index => $one) {?>
                      	<li><a href="<?php echo WEB_ROOT?>/san-pham/<?php echo $one['uri']?>"><?php echo $one['name']?></a></li>
                      	<?php } ?>
                      </ul>
                </li>
                <li><a  <?php if($_SESSION['path'] == 'tintuc') echo "class='active'" ?>href="<?php echo WEB_ROOT?>/tin-tuc"><span>TIN TỨC</span></a></li>
                <li><a  <?php if($_SESSION['path'] == 'tuvan') echo "class='active'" ?>href="<?php echo WEB_ROOT?>/tu-van"><span>TƯ VẤN</span></a></li>
                <li><a  <?php if($_SESSION['path'] == 'lienhe') echo "class='active'" ?>href="<?php echo WEB_ROOT?>/lien-he"><span>Liên Hệ</span></a></li>

            </ul>
        </div>

        <div class="clr"></div>
    </div></div>
	<!-- en header -->

	<?php if (isset($_SESSION['slide'])) {?>
	<!-- slide banner top -->
	<div class="bannerTop bannerSlidePro">
    	<div id="slides">
      		<div class="slides_container">
      			<?php foreach ($_SESSION['slide'] as $index => $one) {?>
                <div class="slide"><img src="<?php echo UPLOAD_IMG_DIR?>slider/<?php echo $one['hinh']?>" /></div>
                <?php }?>
            </div>
        </div>
    </div>
    <!-- en slide banner top -->
	<?php }?>

    <!-- bodymain -->
	<div class="bodyMain">