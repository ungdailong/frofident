<?php $this -> load -> view ('header')?>
<div class="mh-content-m">
<h2 class="mh-tth2">
	<a href="#">Từ khóa - <i style='color:black'><?php echo $keyword?></i></a>
</h2>
<ul class="mh-list-ul">
	<?php foreach($data['tintuc'] as $index => $one){
		$img_tintuc = UPLOAD_IMG_DIR.'tintuc/small_'.$one['hinh'];
	?>
	<li>
		<div class="mh-list-ul-dimg">
			<a title="hình" class="mh-list-ul-img" href="<?php echo WEB_ROOT?>/tintuc/detail/<?php echo $one['id']?>"><img
				src="<?php echo $img_tintuc?>" width="220" height="107" alt="Hinh"></a>
		</div>
		<h3 class="mh-tth3">
			<a href="<?php echo WEB_ROOT?>/tintuc/detail/<?php echo $one['id']?>"><i style='color:black'>Tin tức</i> - <?php echo $one['title']?></a>
		</h3>
		<p class="mh-list-ul-txt"><?php echo $one['intro']?></p>
		<div class="mh-seemore">
			<a class="mh-btn_a" href="<?php echo WEB_ROOT?>/tintuc/detail/<?php echo $one['id']?>">xem thêm &rsaquo;</a>
		</div>
	</li>
	<?php }?>
	<?php foreach($data['thongtin'] as $index => $one){
		$img_tintuc = UPLOAD_IMG_DIR.'notice/small_'.$one['hinh'];
	?>
	<li>
		<div class="mh-list-ul-dimg">
			<a title="hình" class="mh-list-ul-img" href="<?php echo WEB_ROOT?>/thongtincanluuy/detail/<?php echo $one['id']?>"><img
				src="<?php echo $img_tintuc?>" width="220" height="107" alt="Hinh"></a>
		</div>
		<h3 class="mh-tth3">
			<a href="<?php echo WEB_ROOT?>/thongtincanluuy/detail/<?php echo $one['id']?>"><i style='color:black'>Thông tin cần lưu ý</i><?php echo $one['title']?></a>
		</h3>
		<p class="mh-list-ul-txt"><?php echo $one['intro']?></p>
		<div class="mh-seemore">
			<a class="mh-btn_a" href="<?php echo WEB_ROOT?>/thongtincanluuy/detail/<?php echo $one['id']?>">xem thêm &rsaquo;</a>
		</div>
	</li>
	<?php }?>
	<?php foreach($data['dinhcu'] as $index => $one){
		
	?>
	<p>
				<strong><a href='<?php echo WEB_ROOT?>/chuongtrinhdinhcu/detail/<?php echo $one['id']?>'><?php echo $one['title']?></a></strong>
			</p>
			<p><?php echo $one['intro']?></p>
	<?php }?>
</ul>

</div>
<?php $this -> load -> view ('footer')?>