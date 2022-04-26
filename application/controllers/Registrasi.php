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
            // $stylesheet = file_get_contents('./assets/css/bootstrap.min.css');
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
                "nama" => $this->input->post('nama'),
                "alamat" => $this->input->post('alamat'),
                "tgl_lahir" => $this->input->post('tgl_lahir'),
                "agama" => $this->input->post('agama'),
                "tinggi_bdn" => $this->input->post('tinggi_bdn'),
                "berat_bdn" => $this->input->post('berat_bdn'),
                "jenis_kelamin" => $this->input->post('jenis_kelamin'),
                "no_telp" => $this->input->post('no_telp'),
                "status" => $this->input->post('status'),
                "email" => $this->input->post('email'),
                "golongan_darah" => $this->input->post('golongan_darah'),
                "pelatihan" => $this->input->post('pelatihan'),
            ];
            // $mpdf->WriteHTML($stylesheet, 1);
            $mpdf->WriteHTML($this->load->view('registrasi_view',$data,true));
            $mpdf->Output();
        }
    }
    

?>