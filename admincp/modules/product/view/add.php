<?php
if (!defined('DIR_APP'))
    die('Your have not permission');
?>

<div class="box"> <!-- Box begins here -->
    <h2 style="float:left; width:83%"><?php if ($_GET['q'] == 'add') echo "Add"; elseif ($_GET['q'] == 'Edit') echo "Edit"; ?> Sản phẩm</h2> <h2 style="float:right; ">  <?php Admin::button('save, cancel'); ?> </h2>
    <div style="clear:both"></div>

    <?php if (@$_SESSION['message']) { ?>
        <div class="warning"><?php
    echo $_SESSION['message'];
    unset($_SESSION['message']);
        ?></div>
    <?php } ?>
    <div class="content">
        <div id="tabs" class="htabs"><a tab="#tab_general">Information</a></div>

        <form method="post" enctype="multipart/form-data" name="myform">
            <div id="tab_general">
                <table class="form">
                    <tr style="font-weight:bold">
                        <td>Name:</td>
                        <td><input type="text" size="100" value="<?php echo @$row['title'] ?>" name="title"></td>
                    </tr>
                    <tr>
                        <td>Danh mục:</td>
                        <td>
                            <select name="category_id" class="parenMenu">
                                <option value="0">-------</option>
                                <?php
                                foreach ($categorys as $category) {
                                    $selected = ($category['caid'] == @$row['category_id']) ? "selected='true'" : "";
                                    ?>
                                    <option <?php echo $selected; ?> value="<?php echo $category['caid'] ?>"><?php echo $category['name'] ?></option>
                                <?php } ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Giá (VNĐ):</td>
                        <td><input type="text" size="100" value="<?php echo @$row['price'] ?>" name="price"></td>
                    </tr>
					<tr>
                        <td>Intro:</td>
                        <td><textarea name="intro" id="intro"><?php echo str_replace("\\", "", @$row['intro']); ?></textarea></td>
                    </tr>
                    <tr>
                        <td>Content :</td>
                        <td><textarea name="content_" id="content_"><?php echo str_replace("\\", "", @$row['content']); ?></textarea></td>
                    </tr>
                    <tr style="font-weight:bold">
                        <td>Image:</td>
                        <td>
                            <input type="file" name="image" size="30"  />
                            <?php if (!empty($uri)) { ?><img src="<?php echo @$uri ?>" name="<?php echo @$image_name ?>" width="80px" height="80px"/><?php } ?>
                        </td>
                    </tr>


                    <tr>
                        <td><?php echo "Status"; ?>:</td>
                        <td>
                        	<?php if(!isset($row['hide'])) $row['hide'] = 'N'?>
                            <input type="radio" name="hide" value="N" <?php echo @$row['hide'] == 'N' ? 'checked' : ''; ?> /> <?php echo LANG_ENABLE; ?>
                            <input type="radio" name="hide" value="Y" <?php echo @$row['hide'] == 'Y' ? 'checked' : ''; ?> /> <?php echo LANG_DISABLE; ?>
                        </td>
                    </tr>
                </table>
            </div>
        </form>
    </div>
</div> <!-- END Box-->
<script type="text/javascript">

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
</script>
