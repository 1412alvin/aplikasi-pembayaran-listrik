<?php

namespace App\Models;

use CodeIgniter\Model;


class penggunaanmodel extends Model
{
    protected $table = 'penggunaan';
    protected $primaryKey = 'id_penggunaan';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_pelanggan', 'bulan', 'tahun', 'nmeter)awal', 'meter_akhir'];
    // protected $allowedFields = ['username', 'password', 'nomor_kwh', 'nama_pelanggan', 'alamat', 'id_tarif'];
}
