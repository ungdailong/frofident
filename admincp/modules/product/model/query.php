<?php

if (!defined('DIR_APP'))
    die('Your have not permission');

class ModelProduct {

    function insert($image_title) {
        extract($_POST);
        $title = addslashes($title);
        $intro = addslashes($intro);
		$content = addslashes($content_);
		$price = addslashes($price);
		$hide == 'Y' ? 'Y' : 'N';
		$sql = "insert into #__products set
			title ='" . $title . "',
			category_id = " . $category_id.",
			intro='" . $intro . "',
			content='" . $content . "' ,
			price='" . $price . "' ,
			hinh='" . $image_title . "' ,
			date_create=".time().",
			hide='".$hide."'";
		$res = $this->query($sql);
        return $res ? true : false;
    }
	function updateCuraProx (){
		extract($_POST);
		$content = addslashes($content_);
		$sql = "update #__products set
			content='" . $content . "' ,
			date_update=".time()."
			where id=1";
		$res = $this->query($sql);
		return $res ? true : false;
	}
    function update($image_title, $id) {
    	extract($_POST);
    	$title = addslashes($title);
        $intro = addslashes($intro);
		$content = addslashes($content_);
		$price = addslashes($price);
		$hide == 'Y' ? 'Y' : 'N';
    	if ($image_title == null) {
    		$sql = "update #__products set
			title ='" . $title . "',
			category_id = " . $category_id.",
			intro='" . $intro . "',
			content='" . $content . "' ,
			price='" . $price . "' ,
			date_update=".time().",
			hide='".$hide."'
			where id='" . $id . "'";
    	}
    	else{
    		$sql = "update #__products set
			title ='" . $title . "',
			category_id = " . $category_id.",
			intro='" . $intro . "',
			content='" . $content . "' ,
			price='" . $price . "' ,
			hinh='" . $image_title . "' ,
			date_update=".time().",
			hide='".$hide."'
			where id='" . $id . "'";
    	}
    	$res = $this->query($sql);
    	return $res ? true : false;
    }
    function getRecordById($carId){
    	if(intval($carId) > 0){
    		$sql = "select * from #__products where id=".$carId;
    		$res = $this->row($sql);
    		return $res;
    	}
    }
    function delete($data = array()) {

        foreach ($data as $id) {

            $row = $this->row('select * from #__products where id = ' . $id . '');
            $img = $row['image'];
            unlink("../upload/tour/" . $img);
            unlink("../upload/tour/small_" . $img);

            $sql = "delete from #__tour where id = " . $id . "";

            $this->query($sql);
        }
    }

}

?>