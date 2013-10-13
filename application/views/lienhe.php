<?php $this -> load -> view ('header')?>
<div class="inPage">
        	<h1 class="titleAll">Liên hệ</h1>

           <div class="boxContact">

           	<div class="colL">
            		<div class="formC fixed">
                  	<label>Họ Tên:</label><input type="text" id = "name" class = "inpDH"/>
                      <label>E-mail:</label><input type="text" id = "email" class = "inpDH"/>
                      <label>Điện Thoại:</label><input type="text" id = "mobile" class = "inpDH"/>
                    	<label>Nội Dung:</label>
                      <textarea id = "content" class = "inpDH"></textarea>
                      <div class="ptm"><input type="submit" class="bnt" value="Xoá" /> <input type="submit" class="bnt" value="Gửi" /></div>

                  </div>
            	</div>

              <div class="colR">
              		<div class="cont">
                    	  <b>Công Ty TNHH Profident</b><br />
                        85A Phan Kế Bính, P.Đa Kao, Q.01, Tp.HCM<br />
                        Tel: 08 6299 1437<br />
                        Email: info@profident.com.vn<br />
                  </div>
					<div class="map"><img src="<?php echo IMG_DIR?>pic/map.jpg" /></div>
              </div>

              <div class="clr"></div>

			 </div>

        </div>
        <script>
	$(function(){
		$('.colL .bnt:eq(0)').click(function(){
			$('.colL .inpDH').val('');
		})
		$('.colL .bnt:eq(1)').click(function(){
			var name = $('#name').val();
			var email = $('#email').val();
			var mobile = $('#mobile').val();
			var content = $('#content').val();
			if(name == '' || email == '' || mobile == '' || content == ''){
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
						content : content,
						},
					success : function(){
						alert("Thành công. Cảm ơn bạn");
						window.location.href = '';
					}
				})
			}
		})
	});
</script>
        <?php $this -> load -> view ('footer')?>