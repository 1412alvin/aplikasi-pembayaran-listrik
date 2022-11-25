<?php

namespace App\Models;

use CodeIgniter\Model;


class bayarmodel extends Model
{
    protected $table = 'pembayaran';
    protected $primaryKey = 'id_pembayaran';
    protected $useTimestamps = true;
    protected $allowedFields = ['username', 'password', 'nomor_kwh', 'nama_pelanggan', 'alamat', 'id_tarif'];

    public function get_data($username, $password)
    {
        return $this->db->table('pelanggan')->where(array('username' => $username, 'password' => $password))->get()->getRowArray();
    }
}
