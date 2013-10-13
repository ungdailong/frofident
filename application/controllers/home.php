<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this -> load -> model('slidemodel');
		$this -> load -> model('gioithieumodel');
		$this -> load -> model('tintucmodel');
		$this -> load -> model('tuvanmodel');
		$this -> load -> model('productmodel');
		$_SESSION['path'] = 'home';
		$_SESSION['slide'] = $this -> slidemodel -> getAll();
		$_SESSION['title'] = 'Profident - Trang chủ';
	}
	public function index()
	{
		$data['gioithieu'] = $this -> gioithieumodel -> getGioiThieu();
		$data['tintuc'] = $this -> tintucmodel -> getHome();
		$data['tuvan'] = $this -> tuvanmodel -> getTinByNum(3);
		$data['product'] = $this -> productmodel -> getRandomByNum(4);
		$this->load->view('index',$data);
	}
}