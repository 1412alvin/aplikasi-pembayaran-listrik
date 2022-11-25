<?php

namespace App\Models;

use CodeIgniter\Model;


class tarifmodel extends Model
{
    protected $table = 'tarif';
    protected $primaryKey = 'id_tarif';
    protected $useTimestamps = true;
    // protected $allowedFields = ['username', 'password', 'nomor_kwh', 'nama_pelanggan', 'alamat', 'id_tarif'];
}
