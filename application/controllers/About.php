<?php  
class About extends CI_Controller{
	public function __consturct(){
		parent::__construct();
	}

	public function index(){
		$this->load->view('template/header');
		$this->load->view('about');
		$this->load->view('template/footer');
	}
}
?>
