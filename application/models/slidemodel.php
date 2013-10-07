<?php
class slidemodel extends CI_Model {
	function getAll(){
		$query = $this->db->query("select * from tbl_slides where hinh <> '' and hide = 0");
		return $query -> result_array();
	}
}