<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this -> load -> model('gioithieumodel');
		$this -> load -> model('dinhcumodel');
		$this -> load -> model('tintucmodel');
		$_SESSION['path'] = 'home';
	}
	public function index()
	{
		$data['gioithieu'] = $this -> gioithieumodel -> getGioiThieu();
		$data['chuongtrinhdinhcu'] = $this -> dinhcumodel -> getHome();
		$data['tintuc'] = $this -> tintucmodel -> getHome();
		$data['header_title'] = 'Chào mừng đến với Century - Trang chủ';
		$this->load->view('index',$data);
	}
}