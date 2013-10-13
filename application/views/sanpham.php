<?php $this -> load -> view ('header')?>
<!-- product H -->
        <div class="boxProduct">
        		<h1 class="titleAll">Curaprox</h1>

               <div class="contentPro fixed">
               	<img src="images/pic/pic_detail.jpg" class="imgRight borImg" />
               <?php echo $curaprox -> content?>
               </div>

               <hr />

               <ul class="listProduct">
               <?php foreach ($product as $index => $one) {?>
               	<li><a href="<?php echo WEB_ROOT?>/san-pham/chi-tiet/<?php echo $one['id']?>"><img src="<?php echo UPLOAD_IMG_DIR?>product/small_<?php echo $one['hinh']?>" /><b>xem thêm →</b></a></li>
               	<?php }?>
               </ul>
               <div class="clr"></div>

               <?php if(isset($pagination)) echo $pagination ?>

        </div>
        <!-- en product H -->
        <?php $this -> load -> view ('footer')?>