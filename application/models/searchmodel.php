<?php
class searchmodel extends CI_Model {
	function getHome(){
		$query = $this->db->query("select * from tbl_chuong_trinh_dinh_cu where hide=0 and trang_chu=1");
		return $query -> result_array();
	}
	function searchByKeyword($keyword){
		$query1 = $this->db->query('select * from tbl_chuong_trinh_dinh_cu where hide=0 and title like "%'.$keyword.'%"order by id desc');
		$query2 = $this->db->query('select * from tbl_thong_tin_can_luu_y where hide=0 and title like "%'.$keyword.'%"order by id desc ');
		$query3 = $this->db->query('select * from tbl_tin_tuc where hide=0 and title like "%'.$keyword.'%" order by id desc ');
	
		$data['dinhcu'] = $query1 -> result_array();
		$data['thongtin'] = $query2 -> result_array();
		$data['tintuc'] = $query3 -> result_array();
		return $data;
	}
}