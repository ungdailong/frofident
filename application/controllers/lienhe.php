<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lienhe extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$_SESSION['path'] = 'lienhe';
		$this -> load -> model('slidemodel');
		$_SESSION['slide'] = $this -> slidemodel -> getAll();
		$_SESSION['title'] = 'Profident - Liên hệ';
	}
	public function index()
	{
		if ($_SERVER ['REQUEST_METHOD'] == 'POST') {
			$this -> load -> model('lienhemodel');
			$this -> lienhemodel -> insertContact();
		}
		$this->load->view('lienhe');
	}
}