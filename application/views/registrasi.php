<style>
    .bg-regis {
        background-color: #302b63;
        height: 340px;
    }

    .logo-regis {
        width: 250px;
    }

    .logo_main2 {
        /* margin: 20px; */
        /* margin-right: 20px; */
        /* margin-top: 20px; */
    }

    .text-re {
        margin-left: 50px;
        position: absolute;
    }

    .div-shape {
        float: right;
        bottom: 0;

    }

    .shape-regis {
        background-color: #f2b950;
        height: 202px;
        width: 500px;

        border-end-start-radius: 100px;
        border-top-left-radius: 100px;
    }
</style>
<div class="page_content_wrap">
    <div class="content_wrap">

        <div class="content text-center">
            <div class="bg-regis">
                <div class="logo-regis">
                    <img src="<?= base_url() ?>/assets/images/logo-regis.png" class="logo_main2" alt="">
                </div>
                <div class="text-re">
                    <h4 style="color: #f2b950;text-align:left;font-size:30px;"><strong>
                            Alamat Office : <br>
                            VIVO Businiess park A 30</strong>
                    </h4>
                    <p style="color: white;text-align:left;font-size:20px;"><b>Kel.Karang Ayar Kec. Neglasari Kota.
                            <br>Tangerang - Banten</b></p>
                </div>
                <h3 style="color: #f2b950;margin-top:-20px;text-align:right;margin-right:50px"><b>FORM REGISTRASI</b>
                </h3>

                <div class="div-shape">
                    <div class="shape-regis"></div>
                </div>
                <div
                    style="border-radius: 10px;border: black solid 4px;width:157px;height:212px;position:absolute;right:200px;margin-top:80px;background-color:white">
                    <img src="" id="output" alt="" style="max-width: 150px;">
                </div>

            </div>
        </div>
        <form action="<?= base_url('registrasi/x') ?>" method="POST" enctype="multipart/form-data">
            <div>
                <h4><b style="color: #302b63;">PERSONAL INFORMATION</b></h4>
                <div class="row">
                    <div class="col-xl-2">
                        <span>Nama Lengkap : </span>
                    </div>
                    <div class="col-xl-4">
                        <input name="nama" style="background-color: #d9d9d9;" type="text" class="form-control">
                    </div>

                </div>

                <div class="row mt-4">
                    <div class="col-xl-2">
                        <span>Alamat Lengkap : </span>
                    </div>
                    <div class="col-xl-4">
                        <input name="alamat" style="background-color: #d9d9d9;" type="text" class="form-control">
                    </div>
                    <div class="col-xl-3">
                        <span>Foto :</span>
                    </div>
                    <div class="col-xl-3">
                        <div class="input-group mb-3">
                            <input type="file" name="foto" class="form-control" accept="image/*" onchange="loadFile(event)" id="inputGroupFile02">
                            <label class="input-group-text" for="inputGroupFile02">Upload Foto</label>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-xl-2">
                        <span>Tanggal Lahir : </span>
                    </div>
                    <div class="col-xl-4">
                        <input name="tgl_lahir" style="background-color: #d9d9d9;" type="date" class="form-control">
                    </div>
                    <div class="col-xl-3">
                        <span>Tinggi Badan : </span>
                    </div>
                    <div class="col-xl-3">
                        <input name="tinggi_bdn" style="background-color: #d9d9d9;" type="text" class="form-control">
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-xl-2">
                        <span>Agama : </span>
                    </div>
                    <div class="col-xl-4">
                        <input name="agama" style="background-color: #d9d9d9;" type="text" class="form-control">
                    </div>
                    <div class="col-xl-3">
                        <span>Berat Badan: </span>
                    </div>
                    <div class="col-xl-3">
                        <input name="berat_bdn" style="background-color: #d9d9d9;" type="text" class="form-control">
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-xl-2">
                        <span>Jenis Kelamin : </span>
                    </div>
                    <div class="col-xl-4">
                        <input name="jenis_kelamin" style="background-color: #d9d9d9;" type="text" class="form-control">
                    </div>
                    <div class="col-xl-3">
                        <span>Nomor Telp/Wa: </span>
                    </div>
                    <div class="col-xl-3">
                        <input name="no_telp" style="background-color: #d9d9d9;" type="text" class="form-control">
                    </div>

                </div>
                <div class="row mt-4">
                    <div class="col-xl-2">
                        <span>Status : </span>
                    </div>
                    <div class="col-xl-4">
                        <input name="status" style="background-color: #d9d9d9;" type="text" class="form-control">
                    </div>
                    <div class="col-xl-3">
                        <span>Email : </span>
                    </div>
                    <div class="col-xl-3">
                        <input name="email" style="background-color: #d9d9d9;" type="text" class="form-control">
                    </div>

                </div>
                <div class="row mt-4">
                    <div class="col-xl-2">
                        <span>Golongan Darah : </span>
                    </div>
                    <div class="col-xl-4">
                        <input name="golongan_darah" style="background-color: #d9d9d9;" type="text"
                            class="form-control">
                    </div>
                    <div class="col-xl-3">
                        <span>Program Pelatihan yang Diminati : </span>
                    </div>
                    <div class="col-xl-3">
                        <input name="pelatihan" style="background-color: #d9d9d9;" type="text" class="form-control">
                    </div>
                </div>
                <div class="content row text-center mt-5" style="background-color: #d9d9d9; height:100px;">
                    <h4 class="mt-5">Lets join us to be ready as an staff airlines</h4>
                </div>
                <div class="row">
                    <div class="col-xl-4">
                        <div style="background-color: black;width:200px;height:2px;margin-top:50px;margin-left:100px;">
                        </div>
                        <p class="text-center" style="color: black;"><b>Register</b></p>
                    </div>
                    <div class="col-xl-4">
                        <div style="background-color: black;width:200px;height:2px;margin-top:50px;margin-left:100px;">
                        </div>
                        <p class="text-center" style="color: black;"><b>Officer Signature</b></p>
                    </div>
                    <div class="col-xl-4 mt-1">
                        <h4>THANK YOU <span style="color: #f2b950;">FOR REGISTRATION</span></h4>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-xl-4">
                        <button type="submit" class="btn btn-warning">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

</div>