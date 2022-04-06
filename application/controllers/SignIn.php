<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class SignIn extends CI_Controller {
	// private $param;

	// public function __construct() {
		
	// }
        function index(){
            $this->load->view('body/header');
            $this->load->view('SignIn');
            $this->load->view('body/footer');
        }
    }
    

?>