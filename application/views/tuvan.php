<link rel="stylesheet" href="<?php echo JS_DIR?>videolightbox/videolightbox.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo JS_DIR?>videolightbox/overlay-minimal.css"/>
<script src="<?php echo JS_DIR?>videolightbox/jquery.js" type="text/javascript"></script>
<script src="<?php echo JS_DIR?>videolightbox/swfobject.js" type="text/javascript"></script>



<?php $this -> load -> view ('header')?>
<script src="http://baijs.nl/tinycarousel/js/jquery.tinycarousel.js" type="text/javascript"></script>
<script src="http://baijs.nl/tinycarousel/js/website.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="http://baijs.nl/tinycarousel/css/tinyscrollbar.css"/>

<script type="text/javascript">
    $(document).ready(function(){
    	$('#slider2').tinycarousel({ display: 2 });

    });
</script>
        <!-- product H -->
        <div class="boxNews">
        		<h1 class="titleAll">Video</h1>

               <div class="hotNews">
               <div id="slider2" class="listNews">
                <a class="buttons prev" href="#">left</a>
               	<div class="viewport">
               	<ul class="overview">
               		<?php foreach ($video as $index => $one) {
               			$url = $one['url'];
               			$url = str_replace('watch?', '', $url);
               			$url = str_replace('=', '/', $url) . "?autoplay=1&rel=0&enablejsapi=1&playerapiid=ytplayer";
               		?>
                		<li>
                        	<a class="voverlay" href="<?php echo $url?>" title="<?php echo $one['title']?>">
                        		<img alt="<?php echo $one['title']?>" src="<?php echo $one['hinh']?>" class="imgNews" />
                        	</a>
						</li>
					<?php  } ?>
                	</ul>
                </div>
                <a class="buttons next" href="#">right</a>
                </div>
                  <div class="clr"></div>
               </div>

               <h1 class="titleAll">Tư vấn</h1>
               <div class="boxNews">
               	<ul class="listNews">
               		<?php foreach ($tuvan as $index => $one) {?>
                		<li>
                        	<a href="<?php echo WEB_ROOT?>/tu-van/chi-tiet/<?php echo $one['id']?>"><img src="<?php echo UPLOAD_IMG_DIR?>tuvan/small_<?php echo $one['hinh']?>" class="imgNews" /></a>
                        	<h4><a href="<?php echo WEB_ROOT?>/tu-van/chi-tiet/<?php echo $one['id']?>"><?php echo $one['title']?></a></h4><?php echo $one['intro']?>.
							<div class="pts"><a href="<?php echo WEB_ROOT?>/tu-van/chi-tiet/<?php echo $one['id']?>" class="bntCo">xem thêm</a></div>
                      </li>
                     <?php  }?>
                   </ul>
                   <div class="clr"></div>
                    <?php if(isset($pagination)) echo $pagination ?>
               </div>


        </div>
        <!-- en product H -->
<script src="<?php echo JS_DIR?>videolightbox/jquery.tools.min.js" type="text/javascript"></script>
<script src="<?php echo JS_DIR?>videolightbox/videolightbox.js" type="text/javascript"></script>
<?php $this -> load -> view ('footer')?>