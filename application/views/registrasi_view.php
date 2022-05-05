<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css')?>"> -->
    <style>
        .content {
            margin: 50px;
            margin-top: -80px;
        }
        .col-xl-3{
            float: left;
            width: 35%;
        }
        .col-xl-4 {
            float: left;
            width: 25%;
        }

        .col-xl-5 {
            float: left;
            width: 30%;
        }

        .row {
            flex-direction: row;
            margin-bottom: 5px;
            margin-top: 10px;
        }

        input {
            background-color: #d9d9d9;
            width: 130px;
            height: 20px;
        }
    </style>

<body>
    <img style="position:absolute;" src="<?= base_url() ?>assets/images/banner-pdf.jpg" alt="">
    <div
        style="z-index:2;margin-top:-80px;margin-left:570px;border: 2px solid black;border-radius: 10px;width:130px;height:160px;">
        <img src="<?= base_url('assets/images/foto/'.$foto) ?>" alt="">
    </div>
    <div class="content">
        <div>
            <h4><b style="color: #302b63;">PERSONAL INFORMATION</b></h4>
            <div class="row">
                <div class="col-xl-4">
                    <span>Nama Lengkap : </span>
                </div>
                <div>
                    <div style="background-color: #d9d9d9;width:150px;height:20px;">
                        <div style="font-size:12px;margin-left:5px;"><?= $nama ?></div>
                    </div>
                    <!-- <input name="nama" value="<?= $nama ?>" type="text"
                        class="form-control"> -->
                </div>

            </div>

            <div class="row mt-4">
                <div class="col-xl-4">
                    <span>Alamat Lengkap : </span>
                </div>
                <div class="col-xl-4">
                    <div style="background-color: #d9d9d9;width:150px;height:20px;">
                        <div style="font-size:12px;margin-left:5px;"><?= $alamat ?></div>
                    </div>

                    <!-- <input name="alamat" style="background-color: #d9d9d9;" type="text" class="form-control"> -->
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-xl-4">
                    <span>Tanggal Lahir : </span>
                </div>
                <div class="col-xl-4">
                    <div style="background-color: #d9d9d9;width:150px;height:20px;">
                        <div style="font-size:12px;margin-left:5px;"><?= $tgl_lahir ?></div>
                    </div>

                    <!-- <input style="background-color: #d9d9d9;" type="date" class="form-control"> -->
                </div>
                <div class="col-xl-4">
                    <span>Tinggi Badan : </span>
                </div>
                <div class="col-xl-4">
                    <!-- <input style="background-color: #d9d9d9;" type="text" class="form-control"> -->
                    <div style="background-color: #d9d9d9;width:150px;height:20px;">
                        <div style="font-size:12px;margin-left:5px;"><?= $tinggi_bdn ?></div>
                    </div>

                </div>
            </div>
            <div class="row mt-4">
                <div class="col-xl-4">
                    <span>Agama : </span>
                </div>
                <div class="col-xl-4">
                    <div style="background-color: #d9d9d9;width:150px;height:20px;">
                        <div style="font-size:12px;margin-left:5px;"><?= $agama ?></div>
                    </div>
                    <!-- <input style="background-color: #d9d9d9;" type="text" class="form-control"> -->
                </div>
                <div class="col-xl-4">
                    <span>Berat Badan: </span>
                </div>
                <div class="col-xl-4">
                    <div style="background-color: #d9d9d9;width:150px;height:20px;">
                        <div style="font-size:12px;margin-left:5px;"><?= $berat_bdn?></div>
                    </div>
                    <!-- <input style="background-color: #d9d9d9;" type="text" class="form-control"> -->
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-xl-4">
                    <span>Jenis Kelamin : </span>
                </div>
                <div class="col-xl-4">
                    <div style="background-color: #d9d9d9;width:150px;height:20px;">
                        <div style="font-size:12px;margin-left:5px;"><?= $jenis_kelamin ?></div>
                    </div>

                    <!-- <input style="background-color: #d9d9d9;" type="text" class="form-control"> -->
                </div>
                <div class="col-xl-4">
                    <span>Nomor Telp/Wa: </span>
                </div>
                <div class="col-xl-4">
                    <div style="background-color: #d9d9d9;width:150px;height:20px;">
                        <div style="font-size:12px;margin-left:5px;"><?= $no_telp ?></div>
                    </div>

                    <!-- <input style="background-color: #d9d9d9;" type="text" class="form-control"> -->
                </div>

            </div>
            <div class="row mt-4">
                <div class="col-xl-4">
                    <span>Status : </span>
                </div>
                <div class="col-xl-4">
                    <!-- <input style="background-color: #d9d9d9;" type="text" class="form-control"> -->
                    <div style="background-color: #d9d9d9;width:150px;height:20px;">
                        <div style="font-size:12px;margin-left:5px;"><?= $status ?></div>
                    </div>

                </div>
                <div class="col-xl-4">
                    <span>Email : </span>
                </div>
                <div class="col-xl-4">
                    <!-- <input style="background-color: #d9d9d9;" type="text" class="form-control"> -->
                    <div style="background-color: #d9d9d9;width:150px;height:20px;">
                        <div style="font-size:12px;margin-left:5px;"><?= $email ?></div>
                    </div>

                </div>

            </div>
            <div class="row mt-4">
                <div class="col-xl-4">
                    <span>Golongan Darah : </span>
                </div>
                <div class="col-xl-4">
                    <!-- <input style="background-color: #d9d9d9;" type="text" class="form-control"> -->
                    <div style="background-color: #d9d9d9;width:150px;height:20px;">
                        <div style="font-size:12px;margin-left:5px;"><?= $golongan_darah ?></div>
                    </div>

                </div>
                <div class="col-xl-4">
                    <span>Program Pelatihan yang Diminati : </span>
                </div>
                <div class="col-xl-4">
                    <!-- <input style="background-color: #d9d9d9;" type="text" class="form-control"> -->
                    <div style="background-color: #d9d9d9;width:150px;height:20px;">
                        <div style="font-size:12px;margin-left:5px;"><?= $pelatihan ?></div>
                    </div>

                </div>
            </div>
            
            <div class="row" style="margin-top: 230px;">
            <div style="background-color: #d9d9d9; height:50px;text-align:center">
                <h4 class="mt-5">Lets join us to be ready as an staff airlines</h4>
            </div>
                <div class="col-xl-3">
                    <div style="background-color: black;width:200px;height:2px;margin-top:50px;">
                    </div>
                    <p class="text-center" style="color: black;margin-left:70px;font-size:12px;margin-top:2px;"><b>Register</b></p>
                </div>
                <div class="col-xl-3">
                    <div style="background-color: black;width:200px;height:2px;margin-top:50px;">
                    </div>
                    <p class="text-center" style="color: black;margin-left:50px;font-size:12px;margin-top:2px;"><b>Officer Signature</b></p>
                </div>
                <div class="col-xl-2">
                    <h4 style="font-size:12px;margin-top:40px;">THANK YOU <span style="color: #f2b950;">FOR REGISTRATION</span></h4>
                </div>
            </div>
        </div>
    </div>
    <img style="position:absolute;z-index:1;" src="<?= base_url() ?>assets/images/footer.png" alt="">

</body>

</html>