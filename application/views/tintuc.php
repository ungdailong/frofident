<?php $this -> load -> view ('header')?>
<!-- product H -->
        <div class="boxNews">
        		<h1 class="titleAll">Tin Mới</h1>

               <div class="hotNews">
               	<ul class="listNews">
               		<?php foreach($newnews as $index => $one) {?>
                		<li>
                        	<a href="<?php echo WEB_ROOT?>/tin-tuc/chi-tiet/<?php echo $one['id']?>"><img src="<?php echo UPLOAD_IMG_DIR?>tintuc/small_<?php echo $one['hinh']?>" class="imgNews" /></a>
                        	<h4><a href="<?php echo WEB_ROOT?>/tin-tuc/chi-tiet/<?php echo $one['id']?>"><?php echo $one['title']?></a></h4>
<?php echo $one['intro']?>.
                      </li>
                      <?php }?>
                	</ul>
                  <div class="clr"></div>
               </div>

               <h1 class="titleAll">Tin tức</h1>
               <div class="boxNews">
               	<ul class="listNews">
               		<?php foreach ($news as $index => $one) {?>
                		<li>
                        	<a href="<?php echo WEB_ROOT?>/tin-tuc/chi-tiet/<?php echo $one['id']?>"><img src="<?php echo UPLOAD_IMG_DIR?>tintuc/small_<?php echo $one['hinh']?>" class="imgNews" /></a>
                        	<h4><a href="<?php echo WEB_ROOT?>/tin-tuc/chi-tiet/<?php echo $one['id']?>"><?php echo $one['title']?></a></h4><?php echo $one['intro']?>..
							<div class="pts"><a href="<?php echo WEB_ROOT?>/tin-tuc/chi-tiet/<?php echo $one['id']?>" class="bntCo">xem thêm</a></div>
                      </li>
                     <?php  }?>
                   </ul>
                   <div class="clr"></div>
                    <?php if(isset($pagination)) echo $pagination ?>
               </div>


        </div>
        <!-- en product H -->
        <?php $this -> load -> view ('footer')?>