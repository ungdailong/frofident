<?php
if (!defined('DIR_APP'))
    die('Your have not permission');
?>
<div class="box">
	<!-- Box begins here -->
	<h2 style="float: left; width: 83%">Slide</h2>
	<h2 style="float: right;">  <?php Admin::button('save,'); ?> </h2>
	<div style="clear: both"></div>

    <?php if (@$_SESSION['message']) { ?>
        <div class="warning"><?php
    echo $_SESSION['message'];
    unset($_SESSION['message']);
        ?></div>
    <?php } ?>
    <div class="content">
		<div id="tabs" class="htabs">
			<a tab="#tab_general">Content</a>
		</div>

		<form id="form2" method="post" enctype="multipart/form-data"
			name="myform">

			<div id="tab_general">
				<table class="form">
					<thead>
						<tr class="alt">
							<th colspan="2"><strong>Information</strong></th>
						</tr>
					</thead>
                    <?php 
                    		$i = $countrows;
                			foreach ($rows as $index =>$row) {
							$uri_small = $row['hinh'] != "" ? _path_image . 'slider/small_' . $row['hinh'] : "";
							$id = $index + 1;
							$display = $row['hide'];
					?>
                     <tr style="font-weight: bold">
						<td>Hình <?php echo $id?>:</td>
						<td><input type="file" name="image<?php echo $index?>" size="30" />
                            <?php if (!empty($uri_small)) { ?><img
							src="<?php echo $uri_small ?>" width="80px" height="80px" /><?php } ?>
                        </td>
						<td>
						<?php if($uri_small != '' || $uri_small != null){?>
						Status 
							
								<?php if($display=='1') $icon_pub="Unpublish"; else $icon_pub="Publish";  ?>
                                    <a
							href="<?php echo $mod->url('index.php?p='.$_GET['p'])?>/publish/<?=$id?>">
								<img src="images/<?=$icon_pub?>.png" title="<?=$icon_pub?>" />
						</a>
                           <?php }?>
                                    
                        </td>
						<td colspan="2"><a class="delete"
							onclick="remove_slide('slider/remove/<?php echo $id?>', 'Are you sure delete ?')"
							style="cursor: pointer"> <span>Delete</span>
						</a></td>
					</tr>
                    <?php }?> 
                    
                    
                </table>
			</div>
		</form>
	</div>

</div>
<!-- END Box-->

<script type="text/javascript">
    $.tabs('#tabs a');


             
    CKEDITOR.replace( 'intro',
    {
        fullPage : false,
        extraPlugins : 'docprops',
                				
        filebrowserBrowseUrl : 'js/ckfinder/ckfinder.html?type=Images',
        filebrowserImageBrowseUrl : 'js/ckfinder/ckfinder.html?Type=Images',
        filebrowserFlashBrowseUrl : 'js/ckfinder/ckfinder.html?Type=Flash',
        filebrowserUploadUrl : 'js/ckfinder/ckfinder.html?command=QuickUpload&type=Files',
        filebrowserImageUploadUrl : 'js/ckfinder/ckfinder.html?command=QuickUpload&type=Images',
        filebrowserFlashUploadUrl : 'js/ckfinder/ckfinder.html?command=QuickUpload&type=Flash'
    });
    CKEDITOR.replace( 'content_',
    	    {
    	        fullPage : false,
    	        extraPlugins : 'docprops',
    	                				
    	        filebrowserBrowseUrl : 'js/ckfinder/ckfinder.html?type=Images',
    	        filebrowserImageBrowseUrl : 'js/ckfinder/ckfinder.html?Type=Images',
    	        filebrowserFlashBrowseUrl : 'js/ckfinder/ckfinder.html?Type=Flash',
    	        filebrowserUploadUrl : 'js/ckfinder/ckfinder.html?command=QuickUpload&type=Files',
    	        filebrowserImageUploadUrl : 'js/ckfinder/ckfinder.html?command=QuickUpload&type=Images',
    	        filebrowserFlashUploadUrl : 'js/ckfinder/ckfinder.html?command=QuickUpload&type=Flash'
    	    });
    function remove_slide(href,title)
    { //alert(href);
	    if(confirm(title)) {
	    	document.myform.action = href;
	    	document.myform.submit();
	    	return true;
	    }
	    else {
	    	return false;
	    }
    } 
</script>