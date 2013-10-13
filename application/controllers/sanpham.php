<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sanpham extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this -> load -> model('productmodel');
		$this -> load -> library('tool');
		$_SESSION['path'] = 'sanpham';
		$_SESSION['title'] = 'Profident - Sản phẩm';
	}
	public function index($page = 1)
	{
		$data['curaprox'] = $this -> productmodel -> getCuraprox();
		$pagesize = PAGE_SIZE;
		$page = $page - 1;
		$offset = $page * $pagesize;
		$data['product'] = $this -> productmodel -> getAll($offset,$pagesize);
		$num = $this -> productmodel -> CountRecord();
		if($num > $pagesize)
			$data['pagination'] = Tool :: pagination($num,$pagesize,$page,'san-pham');
		$this->load->view('sanpham',$data);
	}
	public function chitiet($id){
		if(intval($id) > 0){
			if($_POST){
				$this -> productmodel -> insertSubcribe($id);
			}
			$data['data'] = $this -> productmodel -> getDetail($id);
			$data['other'] = $this -> productmodel -> getRandomByNum(3,$id);
			$_SESSION['title'] = 'Profident - Sản phẩm - '.$data['data'] -> title;
			$this->load->view('sanpham_chitiet',$data);
		}
	}
	public function type ($type,$page = 1){
		if($type != '' && $type != null){
			$pagesize = PAGE_SIZE;
			$page = $page - 1;
			$offset = $page * $pagesize;
			$category = $this -> productmodel -> getCategoryByUri($type);
			$category_id = $category -> caid;
			$data['product'] = $this -> productmodel -> getAllByType($category_id,$offset,$pagesize);
			$data['curaprox'] = $this -> productmodel -> getCuraprox();
			$num = $this -> productmodel -> CountRecordByType($category_id);
			if($num > $pagesize)
				$data['pagination'] = Tool :: pagination($num,$pagesize,$page,'san-pham/'.$type);
			$_SESSION['title'] = 'Profident - Sản phẩm - '.$category -> name;
			$this->load->view('sanpham',$data);
		}
	}
}