<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller {
	// private $param;

        public function __construct() {
            parent::__construct();
            $this->load->library('session');
        }
        function index(){
            $this->load->view('body/header');
            $this->load->view('registrasi');
            $this->load->view('body/footer');
        }
        function x(){
            $this->load->library('upload');
            // $stylesheet = file_get_contents('./assets/css/bootstrap.min.css');
            $extensi_true = array('png','jpg','jpeg');
            $nama = $_FILES['foto']['name'];
			$x = explode('.', $nama);
			$ekstensi = strtolower(end($x));
            // $target_x = '/Applications/XAMPP/xamppfiles/htdocs/bandestraining/';
            $target_x = '/home/u1677928/public_html/id/';
            if(in_array($ekstensi,$extensi_true) === true){
                $filenamex = md5($_FILES['foto']['name']).'.'.$ekstensi;
                $target = $target_x.'assets/images/foto/'. $filenamex;
                move_uploaded_file($_FILES['foto']['tmp_name'],$target);
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
                "foto" => $filenamex
            ];

                // $mpdf->WriteHTML($stylesheet, 1);
                $mpdf->WriteHTML($this->load->view('registrasi_view',$data,true));
                // $mpdf->Output();
                // $name_file = 'pp';
                $filename=$target_x."/assets/$filenamex.pdf";
                $mpdf->Output($filename, 'F');

                $this->load->library("Mailer");
                $mail = $this->mailer->load();
                    $mail->isSMTP();
                    $mail->Host       = 'mail.bandestraining.com';
                    $mail->SMTPAuth   = true;
                    $mail->Username   = 'info@bandestraining.com';
                    $mail->Password   = 'k)7]yZZe5$TN';
                    $mail->SMTPSecure = 'ssl';
                    $mail->Port       = 465;
                    $mail->setFrom("info@bandestraining.com", "BAT");
                    $mail->addAddress("cs@bandestraining.com");
                    $mail->isHTML(true);
                    $mail->Subject = "Registrasi BAT";
                    $mail->Body    = "<h4><b>Registrasi Berhasil</b><br><br>Nama : ".$this->input->post('nama')." <br> No Telp : ".$this->input->post('no_telp')." <br>Berikut ini form pdf pendaftaran";
                    $mail->addAttachment($target_x.'assets/'.$filenamex.'.pdf');
                    if($mail->send()){
                            // echo $mail->send();
                        $this->session->set_flashdata("pesan", '<div class="alert alert-success" id="alert">Registrasi Berhasil  '.$this->input->post('nama').'</div>');
                        redirect('registrasi');
                    } else {
                        $this->session->set_flashdata("pesan", '<div class="alert alert-danger" id="alert">Email not sent.</div>');
                        redirect('registrasi');
                    }
            }else{
                $this->session->set_flashdata("pesan", '<div class="alert alert-danger" id="alert">Extensi yang diizinkan jpg,jpeg,png</div>');
                redirect('registrasi');
            }
        }
    }
    

?>