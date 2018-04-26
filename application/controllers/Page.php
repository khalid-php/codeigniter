<?php  

class Page extends CI_Controller{
	public function __consturct(){
		parent::__construct();
	}


	public function index(){
		$this->load->view('template/header');
		$this->load->view('page');
		$this->load->view('template/footer');
	}
}
?>
