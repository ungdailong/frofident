<?php
if (!defined('DIR_APP'))
    die('Your have not permission');
?>
<div class="box"> <!-- Box begins here -->
    <h2 style="float:left; width:83%"><?php if ($_GET['q'] == 'add') echo "Add"; elseif ($_GET['q'] == 'edit') echo "Edit"; ?> Category</h2> <h2 style="float:right; ">  <?php Admin::button('save, cancel'); ?> </h2>
    <div style="clear:both"></div>

    <?php if (@$_SESSION['message']) { ?>
        <div class="warning"><?php
    echo $_SESSION['message'];
    unset($_SESSION['message']);
        ?></div>
    <?php } ?>
    <div class="content">
        <div id="tabs" class="htabs"><a tab="#tab_general">Content</a></div>

        <form method="post" enctype="multipart/form-data" name="myform">
            <div id="tab_general">
                <table class="form">
                    <thead>
                        <tr class="alt">
                            <th colspan="2"><strong>Information</strong></th>
                        </tr>
                    </thead>
                    <tr>
                        <td>Name:</td>
                        <td><input type="text" size="100" value="<?php echo @$title ?>" name="title"></td>
                    </tr>
                    <tr>
                        <td>Link Youtube:</td>
                        <td><textarea name="url" id="url"><?php echo str_replace("\\", "", @$url); ?></textarea></td>
                    </tr>
                    <tr>
                        <td>Publish:</td>
                        <td>
                            <input type="radio" name="hide" value="1" <?php echo @$hide==1 ? 'checked' : ''; ?> /> <?php echo "No"; ?>
                            <input type="radio" name="hide" value="0" <?php echo @$hide==0 ? 'checked' : ''; ?> /> <?php echo "Yes"; ?>
                        </td>
                    </tr>
                </table>
            </div>
        </form>
    </div>
</div> <!-- END Box-->