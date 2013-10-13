<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tuvan extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this -> load -> model('tuvanmodel');
		$this -> load -> library('tool');
		$_SESSION['path'] = 'tuvan';
		$_SESSION['title'] = 'Profident - Tư vấn';
	}
	public function index($page = 1)
	{
		$pagesize = PAGE_SIZE;
		$page = $page - 1;
		$offset = $page * $pagesize;
		$data['tuvan'] = $this -> tuvanmodel -> getAll($offset,$pagesize);
		$data['video'] = $this -> tuvanmodel -> getVideoByNum(3);
		$num = $this -> tuvanmodel -> CountRecord();
		if($num > $pagesize)
			$data['pagination'] = Tool :: pagination($num,$pagesize,$page,'tu-van');
		$this->load->view('tuvan',$data);
	}
	public function chitiet($id){
		if(intval($id) > 0){
			$data['data'] = $this -> tuvanmodel -> getDetail($id);
			$data['other'] = $this -> tuvanmodel -> getRandomByNum(3);
			$data['type'] = array('tuvan','tu-van');
			$_SESSION['title'] = 'Profident - Tư vấn - '.$data['data'] -> title;
			$this->load->view('tintuc_chitiet',$data);
		}
	}
}