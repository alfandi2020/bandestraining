<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller {
	// private $param;

	// public function __construct() {
		
	// }
        function index(){
            $this->load->view('body/header');
            $this->load->view('registrasi');
            $this->load->view('body/footer');
        }
    }
    

?>