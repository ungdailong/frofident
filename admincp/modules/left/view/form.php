<?php if (!defined('DIR_APP'))
    die('Your have not permission'); ?>

<div id="sidebar"> <!-- Sidebar begins here -->

    <div class="header logo" style="margin-bottom:30px">
        <a href="." title="VTravel">
            <span style="font-size:30px; font-weight:bold;  color:#FFF">
                Admin
            </span>
        </a>
    </div> <!-- END Logo -->

    <div id="navigation"> <!-- Navigation begins here -->
        <div class="sidenav"><!-- Sidenav -->

            <?php
            $css1 = $css2 = $css3 = $css4 = $css5 = $css6 = $css7 = $css8 = $css9 = $css10= $css11 ="";

            switch (@$_GET['p']) {
                case "about": $css1 = "class='active'";
                    break;
                case "category": $css2 = "class='active'";
                    break;
                case "product": $css3 = "class='active'";
                    break;
                case "user/edit": $css4 = "class='active'";
                    break;
                case "order": $css5 = "class='active'";
                    break;
                case "tintuc": $css6 = "class='active'";
                    break;
				case "tuvan": $css7 = "class='active'";
                    break;
				case "contact": $css8 = "class='active'";
                    break;
                case "tuvan_video": $css9 = "class='active'";
                    break;
              	case "slider": $css10 = "class='active'";
                    break;
               	case "user": $css11 = "class='active'";
                    break;
                default : $css1 = "class='active'";
                    break;
            }
            ?>
            <div class="navhead"><span>Menu</span><span class="navbullet"></span></div><!-- Sidenav Headline -->
            <div class="subnav"><!-- Sidenav Box -->
                <ul class="submenu">
                    <li><a <?php echo $css1; ?> href="<?php echo $mod->url('index.php?p=about'); ?>" title="">Giới thiệu</a></li>
                    <li><a <?php echo $css2; ?> href="<?php echo $mod->url('index.php?p=category'); ?>" title="">Danh mục sản phẩm</a></li>
					<li><a <?php echo $css3; ?> href="<?php echo $mod->url('index.php?p=product'); ?>" title="">Sản phẩm</a></li>
					<li><a <?php echo $css5; ?> href="<?php echo $mod->url('index.php?p=order'); ?>" title="">Đặt hàng</a></li>
                    <li><a <?php echo $css6; ?> href="<?php echo $mod->url('index.php?p=tintuc'); ?>" title="">Tin tức</a></li>
					<li><a <?php echo $css7; ?> href="<?php echo $mod->url('index.php?p=tuvan'); ?>" title="">Tư vấn</a></li>
					<li><a <?php echo $css9; ?> href="<?php echo $mod->url('index.php?p=tuvan_video'); ?>" title="">Tư vấn - Video</a></li>
                    <li><a <?php echo $css10; ?> href="<?php echo $mod->url('index.php?p=slider'); ?>" title="">Slide</a></li>
                    <li><a <?php echo $css8; ?> href="<?php echo $mod->url('index.php?p=contact'); ?>" title="">Liên hệ</a></li>

                </ul>
            </div>
            <div class="navhead"><span>Admin</span><span class="navbullet"></span></div>
            <div class="subnav" style="display:block">
                <ul class="submenu">
                    <?php if($_SESSION['admin_group_id']==1){?>
                    <li><a  <?php echo $css11; ?>href="<?php echo $mod->url('index.php?p=user'); ?>" title="">Users manager</a></li>
					<?php }?>
                    <li><a <?php echo $css4; ?> href="<?php echo $mod->url('index.php?p=user/edit'); ?>" title="">My Account</a></li>

                </ul>
            </div><!-- /Sidenav Box -->
        </div><!-- /Sidenav -->
    </div> <!-- END Navigation -->


</div> <!-- END Sidebar -->