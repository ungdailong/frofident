<?php $this -> load -> view ('header')?>
        <!-- news Home-->
        <div class="boxNewsH">

        	<div class="colN">
           	 <h1 class="titleAll">Giới thiệu</h1>
             	 <p class="content"><?php echo stripslashes($gioithieu -> intro) ?>. </p>
                <div class="more"><a href="<?php echo WEB_ROOT?>/gioi-thieu"> >> xem thêm</a></div>
           </div>

           <div class="colN marC">
           	 <h1 class="titleAll">Tin tức</h1>
             	 <ul class="listN">
             	 <?php foreach ($tintuc as $index => $one) {?>
               	<li><h4><a href="<?php echo WEB_ROOT?>/tin-tuc/chi-tiet/<?php echo $one['id']?>"><?php echo $one['title']?>.</a></h4><?php echo $one['intro']?>.</li>
                  <?php }?>
               </ul>
               <div class="more"><a href="<?php echo WEB_ROOT?>/tin-tuc"> >> xem thêm</a></div>
           </div>

           <div class="colN">
           	 <h1 class="titleAll">Tư vấn</h1>
             	 <ul class="listN2">
             	 <?php foreach ($tuvan as $index => $one) {?>
               	<li><a href="<?php echo WEB_ROOT?>/tu-van/chi-tiet/<?php echo $one['id']?>"><?php echo $one['title']?>. </a></li>
                  <?php }?>
               </ul>
                <div class="more"><a href="<?php echo WEB_ROOT?>/tu-van"> >> xem thêm</a></div>
           </div>


           <div class="clr"></div>

        </div>
        <!-- en news home -->

        <!-- product H -->
        <div class="productH">
        		<h1 class="titleAll2">Sản phẩm</h1>
               <ul class="listProduct">
               <?php foreach ($product as $index => $one) {?>
               	<li><a href="<?php echo WEB_ROOT?>/san-pham/chi-tiet/<?php echo $one['id']?>"><img src="<?php echo UPLOAD_IMG_DIR?>product/small_<?php echo $one['hinh']?>" /><b>xem thêm →</b></a></li>
               	<?php }?>
               </ul>
               <div class="clr"></div>
        </div>
        <!-- en product H -->
<?php $this -> load -> view ('footer')?>