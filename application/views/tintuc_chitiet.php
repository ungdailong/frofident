<?php $this -> load -> view ('header')?>
<div class="boxProDetail">

           	<h1 class="titleN"><?php echo $data -> title?>. </h1>
            	<div class="direction"><?php echo $data -> intro ?>.</div>
            	<div class="contnet"><?php echo $data -> content ?>.

           </div>

        <!-- product H -->
        <div class="boxNews">
        		<h1 class="titleAll">Tin Khác</h1>

               <div class="hotNews">
               	<ul class="listNews">
               		<?php foreach ($other as $index => $one) {?>
                		<li>
                        	<a href="<?php echo WEB_ROOT?>/<?php echo $type[1]?>/chi-tiet/<?php echo $one['id']?>"><img src="<?php echo UPLOAD_IMG_DIR.$type[0]?>/small_<?php echo $one['hinh']?>" class="imgNews" /></a>
                        	<h4><a href="<?php echo WEB_ROOT?>/<?php echo $type[1]?>/chi-tiet/<?php echo $one['id']?>"><?php echo $one ['title']?></a></h4><?php echo $one['intro']?>.
                      </li>
                     <?php } ?>
                	</ul>
                  <div class="clr"></div>
               </div>



        </div>
        <!-- en product H -->
        <?php $this -> load -> view ('footer')?>