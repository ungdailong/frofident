<?php $this -> load -> view ('header')?>
<div class="inPage">
        	<h1 class="titleAll"><?php echo $gioithieu -> title?></h1>
           <p class="content">
           	 <?php echo $gioithieu -> intro?><br /><br />


             <?php echo stripslashes($gioithieu -> content)?>
           </p>
        </div>
        <?php $this -> load -> view ('footer')?>