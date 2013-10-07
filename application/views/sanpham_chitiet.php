<?php $this -> load -> view ('header')?>
<!-- product H -->
        <div class="boxProDetail">

        	<h1 class="titleAll2">Sản phẩm</h1>

           <div class="colLP">
           	<img src="images/pic/pro01.jpg" />
           </div>

           <div class="colRP">
           	<div class="fr">
              		  <div class="price">100.000 đ</div>
                    <a id="various1" href="#inline1" class="bntBuy">Mua Hàng</a>
              </div>
           	<h1 class="titleN">Bàn Chải Đánh Răng</h1>
              <div class="contentD">
              		<h4>Chức năng:</h4>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis nulla id orci malesuada porta posuere quis massa.

Nunc vitae purus non augue scelerisque ultricies vitae et velit. Sed vitae lectus id sem lobortis scelerisque. Praesent eget consequat

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis nulla id orci malesuada porta posuere quis massa.<br /><br />
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis nulla id orci malesuada porta posuere quis massa.

Nunc vitae purus non augue scelerisque ultricies vitae et velit. Sed vitae lectus id sem lobortis scelerisque. Praesent eget consequat

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis nulla id orci malesuada porta posuere quis massa.
              </div>

              <!-- popup -->
              <div style="display: none;">
                    <div id="inline1" class="boxForm">

                        <div class="fromDH">

                            <h1 class="titleBar">Form Đặt Mua Hàng</h1>
                            <div class="colLD">
                                <label>Họ & Tên <span class="blue">*</span>:</label> <input type="text" class="inpDH" /><br />
                                <label>Địa chỉ email:</label> <input type="text" class="inpDH" /><br />
                                <label>Địa chỉ nhận hàng:<span class="blue">*</span>:</label> <input type="text" class="inpDH" /><br />
                                <label>Số điện thoại: <span class="blue">*</span>:</label> <input type="text" class="inpDH" /><br />

                            </div>
                            <div class="colRD">
                            		<div class="col1"><label>Sản phẩm: <span class="blue">*</span>:</label> <input type="text" class="inpDH1" /></div>
                                <div class="col2"><label>Số Lượng: <span class="blue">*</span> :</label>  <input type="text" class="inpDH2" /></div>
                                <div class="clr"></div>
                                <label>Ghi Chú:  <span class="blue">*</span>:</label>  <textarea class="areaDH"></textarea><br />


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

           <div class="boxCD">
           	<div class="imgRight"><img src="images/pic/video.jpg" /></div>
            	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis nulla id orci malesuada porta posuere quis massa. Nunc vitae purus non augue scelerisque ultricies vitae et velit. Sed vitae lectus id sem lobortis scelerisque. Praesent eget consequat libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis nulla id orci malesuada porta posuere quis massa. Nunc vitae purus non augue scelerisque ultricies vitae et velit. Sed vitae lectus id sem lobortis scelerisque. Praesent eget consequat libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br /><br /> Pellentesque quis nulla id orci malesuada porta posuere quis massa. Nunc vitae purus non augue scelerisque ultricies vitae et velit. Sed vitae lectus id sem lobortis scelerisque. Praesent eget consequat libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis nulla id orci malesuada porta posuere quis massa. Nunc vitae purus non augue scelerisque ultricies vitae et velit. Sed vitae lectus id sem lobortis scelerisque. Praesent eget consequat libero.
           </div>

        </div>

        <div class="boxProductOther">
        		<h1 class="titleAll2">Sản phẩm khác</h1>
               <ul class="listProduct">
               	<li><a href="#"><img src="images/pic/pro01.jpg" /><b>xem thêm →</b></a></li>
                  <li><a href="#"><img src="images/pic/pro02.jpg" /><b>xem thêm →</b></a></li>
                  <li><a href="#"><img src="images/pic/pro01.jpg" /><b>xem thêm →</b></a></li>
                  <li><a href="#"><img src="images/pic/pro02.jpg" /><b>xem thêm →</b></a></li>

               </ul>
               <div class="clr"></div>
        </div>
        <!-- en product H -->
        <?php $this -> load -> view ('footer')?>