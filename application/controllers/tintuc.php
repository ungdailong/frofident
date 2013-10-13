<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tintuc extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this -> load -> model('tintucmodel');
		$this -> load -> library('tool');
		$_SESSION['path'] = 'tintuc';
		$_SESSION['title'] = 'Profident - Tin tức';
	}
	public function index($page = 1)
	{
		$pagesize = PAGE_SIZE;
		$page = $page - 1;
		$offset = $page * $pagesize;
		$data['newnews'] = $this -> tintucmodel -> getRandomByNum(3);
		$data['news'] = $this -> tintucmodel -> getAll($offset,$pagesize);
		$num = $this -> tintucmodel -> CountRecord();
		if($num > $pagesize)
			$data['pagination'] = Tool :: pagination($num,$pagesize,$page,'tin-tuc');
		$this->load->view('tintuc',$data);
	}
	public function chitiet($id){
		if(intval($id) > 0){
			$data['data'] = $this -> tintucmodel -> getDetail($id);
			$data['other'] = $this -> tintucmodel -> getRandomByNum(3);
			$data['type'] = array('tintuc','tin-tuc');
			$_SESSION['title'] = 'Profident - Tin tức - '.$data['data'] -> title;
			$this->load->view('tintuc_chitiet',$data);
		}
	}
}