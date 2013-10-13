<?php $this -> load -> view ('header')?>
<!-- product H -->
        <div class="boxProDetail">

        	<h1 class="titleAll2">Sản phẩm</h1>

           <div class="colLP">
           	<img src="<?php echo UPLOAD_IMG_DIR?>product/small_<?php echo $data -> hinh ?>" />
           </div>

           <div class="colRP">
           	<div class="fr">
              		  <div class="price"><?php echo number_format($data -> price,0,'','.') ?> đ</div>
                    <a id="various1" href="#inline1" class="bntBuy">Mua Hàng</a>
              </div>
           	<h1 class="titleN"><?php echo $data -> title?></h1>
              <div class="contentD">
              		<h4>Chức năng:</h4>
                   <?php echo $data -> content?>
              </div>

              <!-- popup -->
              <div style="display: none;">
                    <div id="inline1" class="boxForm">

                        <div class="fromDH">

                            <h1 class="titleBar">Form Đặt Mua Hàng</h1>
                            <div class="colLD">
                                <label>Họ & Tên <span class="blue">*</span>:</label> <input type="text" class="inpDH" id = 'name'/><br />
                                <label>Địa chỉ email:</label> <input type="text" class="inpDH" id = 'email' /><br />
                                <label>Địa chỉ nhận hàng:<span class="blue">*</span>:</label> <input type="text" class="inpDH" id = 'address'/><br />
                                <label>Số điện thoại: <span class="blue">*</span>:</label> <input type="text" class="inpDH" id = 'mobile'/><br />

                            </div>
                            <div class="colRD">
                            		<div class="col1"><label>Sản phẩm: <span class="blue">*</span>:</label> <input type="text" class="inpDH1" id = 'product' value = "<?php echo $data -> title?>"/></div>
                                <div class="col2"><label>Số Lượng: <span class="blue">*</span> :</label>  <input type="text" class="inpDH2" id = 'numProduct'/></div>
                                <div class="clr"></div>
                                <label>Ghi Chú:  <span class="blue">*</span>:</label>  <textarea class="areaDH" id = 'note'></textarea><br />


                                <div class="ptl"><input type="submit" value="Xoá" class="bntCo" /> <input type="submit" value="Đặt hàng" class="bntCo" /></div>
                            </div>
                            <div class="clr"></div>
                            <div class="boxAN">
                            		 Trong trường hợp muốn đặt mua các sản phẩm khác nữa, Quý khách vui lòng ghi mã sản phẩm và số lượng vào phần ghi chú. Xin cảm ơn.
                            </div>
                        </div>

                        <!-- thanh cong -->
                        <div class="boxTC fixed">
                        		<img src="images/animal2.png" class="imgLeft" />
                             <div class="ptl">Cảm ơn sự quan tâm của Quý Khách. Trong vòng  24 tiếng sẽ có nhân viên <b>Profident</b> liên hệ với Quý Khách để xác nhận đơn đặt hàng.</div>
                             <!--<div class="clr alc"><a href="#" class="bntCo">Đóng</a></div> -->
                        </div>
                        <!-- en thanh cong -->

                    </div>
                </div>
              <!-- en popup -->

           </div>


           <div class="clr"></div>



        </div>

        <div class="boxProductOther">
        		<h1 class="titleAll2">Sản phẩm khác</h1>
               <ul class="listProduct">
               <?php foreach ($other as $index => $one) {?>
               	<li><a href="<?php echo WEB_ROOT?>/san-pham/chi-tiet/<?php echo $one['id']?>"><img src="<?php echo UPLOAD_IMG_DIR?>product/small_<?php echo $one['hinh']?>" /><b>xem thêm →</b></a></li>
               <?php } ?>
               </ul>
               <div class="clr"></div>
        </div>
        <!-- en product H -->
        <script>
	$(function(){
		$('.fromDH .bntCo:eq(0)').click(function(){
			$('.fromDH .inpDH').val('');
			$('.fromDH .inpDH1').val('');
			$('.fromDH .inpDH2').val('');
			$('.fromDH textarea').val('');
		})
		$('.fromDH .bntCo:eq(1)').click(function(){
			var name = $('#name').val();
			var email = $('#email').val();
			var mobile = $('#mobile').val();
			var note = $('#note').val();
			var address = $('#address').val();
			//var product = $('#product').val();
			var numProduct = $('#numProduct').val();

			if(name == '' || email == '' || mobile == '' || note == '' || address == '' || product == '' || numProduct == ''){
				alert("Vui lòng nhập đủ thông tin");
				return false;
			}
			else{
				$.ajax({
					url : "",
					type : "POST",
					data :{
						name : name,
						email : email,
						mobile : mobile,
						note : note,
						address : address,
						numProduct : numProduct
						},
					success : function(){
						alert("Đăng kí thành công. Cảm ơn bạn");
						window.location.href = '';
					}
				})
			}
		})
	});
</script>
        <?php $this -> load -> view ('footer')?>