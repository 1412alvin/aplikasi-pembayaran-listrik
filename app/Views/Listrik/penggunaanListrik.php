<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APLIKASI PEMBAYARAN LISTRIK - PENGGUNAAN LISTRIK</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
</head>

<body style="background:url('../images/bg_pln.jpg');">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class=""></div>
                <div class="col">
                    <div class="panel panel-primary">
                        <!-- judul aplikasi -->
                        <div class="panel-heading">
                            <a href="/listrik/beranda">
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
                                <strong>PENGGUNAAN LISTRIK</strong>
                            </div>
                        </div>
                        <a href="/listrik/beranda">
                            <div class="text-left">
                                <img src="../images/back.png" alt="logo" class="logo" width="40px">
                            </div>
                        </a>
                        <br>
                        <!-- end judul aplikasi -->

                        <!-- isi -->
                        <div class="container">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">no</th>
                                        <th scope="col">Nama Pelanggan</th>
                                        <th scope="col">bulan</th>
                                        <th scope="col">tahun</th>
                                        <th scope="col">Meter Awal</th>
                                        <th scope="col">Meter Akhir</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($penggunaan as $p) : ?>
                                        <?php if (session()->get('id_pelanggan') == $p['id_pelanggan']) { ?>
                                            <tr>
                                                <th scope="row"><?= $i++; ?></th>
                                                <td><?= session()->get('nama_pelanggan'); ?></td>
                                                <td><?= $p['bulan']; ?></td>
                                                <td><?= $p['tahun']; ?></td>
                                                <td><?= $p['meter_awal']; ?></td>
                                                <td><?= $p['meter_akhir']; ?></td>
                                                <td>
                                                    <a href="/listrik/deleteP/<?= $p['id_penggunaan'] ?>" class="btn btn-primary">Update</a>
                                                    <a href="/listrik/deleteP/<?= $p['id_penggunaan'] ?>" class="btn btn-danger" onclick="return confirm('apakah anda yakin' ); ">Delete</a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    <?php endforeach ?>
                                </tbody>

                            </table>


                        </div><br>
                        <div class="text-center">
                            <a href="/listrik/tambah_penggunaan">
                                <button class="btn btn-primary btn-lg text-left" style="width: 30%;">TAMBAH DATA</button>
                            </a>

                        </div>
                        <br><br><br><br><br>

                        <!-- end isi -->

                        <!-- footer -->
                        <div class="panel-footer">
                            <center>
                                <strong>Uji kompetensi 2022
                                    <!-- <br> -->

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