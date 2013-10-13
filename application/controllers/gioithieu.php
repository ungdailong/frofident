<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gioithieu extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this -> load -> model('slidemodel');
		$this -> load -> model('gioithieumodel');
		$_SESSION['path'] = 'gioithieu';
		$_SESSION['slide'] = $this -> slidemodel -> getAll();
		$_SESSION['title'] = 'Profident - Giới thiệu';
	}
	public function index()
	{
		$data['gioithieu'] = $this -> gioithieumodel -> getGioiThieu();
		$this->load->view('gioithieu',$data);
	}
}