<?php

namespace App\Models;

use CodeIgniter\Model;


class akunmodel extends Model
{
    protected $table = 'pelanggan';
    protected $table1 = 'tarif';
    protected $primaryKey = 'id_pelanggan';
    protected $useTimestamps = true;
    protected $allowedFields = ['username', 'password', 'nomor_kwh', 'nama_pelanggan', 'alamat', 'id_tarif'];

    public function get_data($username, $password)
    {
        return $this->db->table('pelanggan')->where(array('username' => $username, 'password' => $password))->get()->getRowArray();
    }
}
