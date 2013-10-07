<?php
if (!defined('DIR_APP'))
    die('Your have not permission');

class ModelSlider {

    function update($image_title,$id) {
        if($image_title != null)
			$sql = "update #__slides set 
				hinh ='" . $image_title . "', 
				date_create=".time()."  
				where id=".$id;
       
		$res = $this->query($sql);

        return $res ? true : false;
    }
}

?>