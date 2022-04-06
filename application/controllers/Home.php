<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	// private $param;

	// public function __construct() {
		
	// }
	public function index()
	{
		$this->load->view('body/header');
		$this->load->view('home');
		$this->load->view('body/footer');
	}
	public function contact(){
		$this->load->view('body/header');
		$this->load->view('contact');
		$this->load->view('body/footer');
	}
	public function about(){
		$this->load->view('body/header');
		$this->load->view('about');
		$this->load->view('body/footer');
	}
	public function q1(){
		// $id = $this->input->get('id');
		// if ($this->uri->segment('3') == true) {
			$this->load->view('body/header');
			$this->load->view('detail/q');
			$this->load->view('body/footer');
		// }
	}
	public function q2(){
		// $id = $this->input->get('id');
		// if ($this->uri->segment('3') == true) {
			$this->load->view('body/header');
			$this->load->view('detail/q2');
			$this->load->view('body/footer');
		// }
	}
}
