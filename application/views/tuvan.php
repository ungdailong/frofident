<link rel="stylesheet" href="<?php echo JS_DIR?>videolightbox/videolightbox.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo JS_DIR?>videolightbox/overlay-minimal.css"/>
<script src="<?php echo JS_DIR?>videolightbox/jquery.js" type="text/javascript"></script>
<script src="<?php echo JS_DIR?>videolightbox/swfobject.js" type="text/javascript"></script>


<?php $this -> load -> view ('header')?>
        <!-- product H -->
        <div class="boxNews">
        		<h1 class="titleAll">Video</h1>

               <div class="hotNews">
               	<ul class="listNews">
               		<?php foreach ($video as $index => $one) {
               			$url = $one['url'];
               			$url = str_replace('watch?', '', $url);
               			$url = str_replace('=', '/', $url) . "?autoplay=1&rel=0&enablejsapi=1&playerapiid=ytplayer";
               		?>
                		<li>
                        	<a class="voverlay" href="<?php echo $url?>" title="<?php echo $one['title']?>"><img alt="<?php echo $one['title']?>" src="<?php echo $one['hinh']?>" class="imgNews" /></a>
						</li>
					<?php  } ?>
                	</ul>
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