<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tintuc extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this -> load -> model('tintucmodel');
		$_SESSION['path'] = 'tintuc';
	}
	public function index($page = 0)
	{
		$pagesize = PAGE_SIZE;
		if($page == 0){
			$page = 1 ;
			$offset = 0;
		}
		
		$offset = ($page - 1) * $pagesize;
		
		
		$data['data'] = $this -> tintucmodel -> getAll($pagesize,$offset);
		foreach ($data['data'] as $index => $one){
			$id_arr[] = $one['id'];
		}
		$idarr = '('.implode(',', $id_arr).')';
		$data['tinlienquan'] = $this -> tintucmodel -> getTinLienQuan($idarr);
		$numrecord = $this -> tintucmodel -> getCountAll();
		$data['pagecount'] = ceil($numrecord / $pagesize);
		$data['page'] = $page;
		$data['header_title'] = 'Century - Tin tức';
		$this->load->view('tintuc',$data);
	}
	public function detail($detailid){
		$data['detail'] = $this -> tintucmodel -> getDetail($detailid);
		$data['header_title'] = 'Century - '.$data['detail'][0]['title'];
		$this->load->view('detail',$data);
	}
}