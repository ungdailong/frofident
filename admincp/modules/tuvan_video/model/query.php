<?php
if (!defined('DIR_APP'))
    die('Your have not permission');

class ModelTuvanVideo {

    function insert($image_title) {
        extract($_POST);
        $title = addslashes($title);
        $intro = addslashes($intro);
		$content = addslashes($content_);


		$sql = "insert into #__tu_van_video set
			title ='" . $title . "',
			intro='" . $intro . "',
			content='" . $content . "' ,
			hinh='" . $image_title . "' ,
			date_create=".time().",
			hide=".$hide;


		$res = $this->query($sql);

        return $res ? true : false;
    }

    function update($image_title, $id) {
        extract($_POST);
        $title = addslashes($title);
        $intro = addslashes($intro);
		$content = addslashes($content_);
		if ($image_title == null) {
			$sql = "update #__tu_van_video set
			title ='" . $title . "',
			intro='" . $intro . "',
			content='" . $content . "' ,
			date_create=".time().",
			hide=".$hide."
			where id='" . $id . "'";
		}
		else{
			$sql = "update #__tu_van_video set
			title ='" . $title . "',
			intro='" . $intro . "',
			content='" . $content . "' ,
			hinh='" . $image_title . "' ,
			date_create=".time().",
			hide=".$hide."
			where id='" . $id . "'";
		}

		$res = $this->query($sql);

        return $res ? true : false;
    }

    function delete($data = array()) {
    	$idstr = '('.implode(',', $data).')';
    	$sql = "delete from #__tu_van_video where id IN " . $idstr . "";
    	$res = $this->query($sql);
    	return $res ? true : false;
    }
    function getAllTinTuc($offset,$pagesize){
    	$sql = "select * from #__tu_van_video order by id desc Limit $offset, $pagesize";
    	$res = $this->rows($sql);
    	return $res;
    }
    function countTinTuc(){
    	$sql = "select * from #__tu_van_video";
    	return $this -> num($sql);
    }
    function getRecordById($tuVanId){
    	if(intval($tuVanId) > 0){
    		$sql = "select * from #__tu_van_video where id = ".$tuVanId;
    		$res = $this->row($sql);
    		return $res;
    	}
    }
}

?>