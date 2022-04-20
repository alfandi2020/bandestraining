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
        function x(){
            $mpdf = new \Mpdf\Mpdf([
                'tempDir' => '/tmp',
                'mode' => '',
                'format' => 'A4',
                'default_font_size' => 0,
                'default_font' => '',
                'margin_left' => 0,
                'margin_right' => 0,
                'margin_top' => 0,
                'margin_bottom' => 0,
                // 'margin_header' => 10,
                // 'margin_footer' => 5,
                'orientation' => 'P',
            ]);
            $data = [
                "nama" => $this->input->post('nama')
            ];
            $mpdf->WriteHTML($this->load->view('registrasi_view',$data,true));
            $mpdf->Output();
        }
    }
    

?>