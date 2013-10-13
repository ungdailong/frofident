<?php
class productmodel extends CI_Model {
	function getRandomByNum($num,$idexcept = 0){
		if(intval($num > 0)){
			if(intval($idexcept) == 0)
				$query = $this->db->query("select * from tbl_products where hide='N' and type = 'product' ORDER BY RAND() LIMIT " . $num);
			else
				$query = $this->db->query("select * from tbl_products where hide='N' and type = 'product' and id <> ".$idexcept." ORDER BY RAND() LIMIT " . $num);
			return $query -> result_array();
		}
	}
	function getCuraprox(){
		$query = $this->db->query("select * from tbl_products where hide='N' and type = 'curaprox'");
		return $query -> row();
	}
	function getAll($offset,$pagesize){
		$query = $this->db->query("select * from tbl_products where type = 'product' and hide='N' order by id desc LIMIT ".$offset.",".$pagesize);
		return $query -> result_array();
	}
	function CountRecord(){
		$query = $this->db->query("select * from tbl_products where hide='N'");
		return $query -> num_rows();
	}
	function getCategory() {
		$query = $this->db->query("select * from tbl_category where status=1");
		return $query -> result_array();
	}
	function getDetail($detailid){
		$query = $this->db->query("select * from tbl_products where hide='N' and id=".$detailid);
		return $query -> row();
	}
	function getCategoryByUri($uri){
		if($uri != '' && $uri != null){
			$query = $this->db->query("select * from tbl_category where uri='".$uri."'");
			return $query -> row();
		}
	}
	function getAllByType($category_tuvan_id,$offset,$pagesize){
		if(intval($category_tuvan_id) > 0){
			$query = $this->db->query("select * from tbl_products where hide='N' and category_id = ".$category_tuvan_id." order by id desc LIMIT ".$offset.",".$pagesize);
			return $query -> result_array();
		}
	}
	function CountRecordByType($category_tuvan_id){
		$query = $this->db->query("select * from tbl_products where hide='N' and category_id = ".$category_tuvan_id);
		return $query -> num_rows();
	}
	function insertSubcribe($id = 0){
		extract($_POST);
		$data = array(
				'name' => $name,
				'email' => $email,
				'mobile' => $mobile,
				'address' => $address,
				'note' => $note,
				'product_id' => $id,
				'product_num' => $numProduct,
				'date_create' => time()
		);
		$this->db->insert('tbl_subcribe', $data);
	}
}