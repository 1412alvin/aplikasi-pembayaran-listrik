<!DOCTYPE html>
<html lang="en">

<head>
    <title>APLIKASI PEMBAYARAN LISTRIK - REGISTRASI</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
</head>

<body style="background:url('../images/bg_pln.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="panel panel-primary">
                        <!-- judul aplikasi -->
                        <div class="panel-heading">
                            <a href="/listrik">
                                <div style="margin-top: 5px;margin-bottom: 5px;">
                                    <img src="../images/logo_pln.png" alt="logo" class="logo" width="90px">
                                </div>
                            </a>
                            <div style="margin-left: 110px; margin-top: -90px; font-size: 120%;">
                                A P L I K A S I &nbsp; P E M B A Y A R A N &nbsp;
                                <br>
                                L I S T R I K &nbsp; P A S C A B A Y A R
                            </div>
                            <div style="margin-left: 110px; font-size: 200%;">
                                <strong>FORM REGISTRASI</strong>
                            </div>
                        </div>
                        <!-- end judul aplikasi -->

                        <!-- isi -->
                        <div class="panel-body">
                            <div class="col-md-12">
                                <form action="/Listrik/save" method="post">
                                    <div class="form-group">
                                        <label>USERNAME</label>
                                        <input type="text" name="username" id="username" class="form-control" placeholder="Masukan username Anda..." autofocus>
                                    </div>
                                    <div class="form-group">
                                        <label>PASSWORD</label>
                                        <input type="password" name="password" id="password" class="form-control" placeholder="Masukan password Anda...">
                                    </div>
                                    <div class="form-group">
                                        <label>NOMOR KWH</label>
                                        <input type="text" name="nomor_kwh" id="nomor_kwh" class="form-control" placeholder="Masukan nomor kwh anda">
                                    </div>
                                    <div class="form-group">
                                        <label>NAMA PELANGGAN</label>
                                        <input type="text" name="nama_pelanggan" id="nama_pelanggan" class="form-control" placeholder="Masukan Nama Anda...">
                                    </div>
                                    <div class="form-group">
                                        <label>ALAMAT</label>
                                        <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukan alamat Anda...">
                                    </div>
                                    <div class="form-group">
                                        <label>DAYA</label>
                                        <select list="daya" name="daya" id="daya" class="form-control" <?php foreach ($tarif as $t) : ?>>
                                            <option value=" <?= $t['id_tarif']; ?>"><?= $t['daya']; ?> </option>

                                        <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-block btn-lg">REGISTRASI </button>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <a href="login">Sudah punya akun? klik disini!</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- end isi -->

                        <!-- footer -->
                        <div class="panel-footer">
                            <center>
                                <strong>uji kompetensi 2022
                                    <br>


                            </center>
                        </div>
                        <!-- end footer -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>