<?php

namespace App\Controllers;

use App\Models\akunmodel;

use App\Models\tarifmodel;

use App\Models\penggunaanmodel;

class Listrik extends BaseController
{
    protected $akunmodel;
    protected $tarifmodel;
    protected $penggunaanmodel;
    // protected $db;
    public function __construct()
    {
        $this->akunmodel = new akunmodel();
        $this->tarifmodel = new tarifmodel();
        $this->penggunaanmodel = new penggunaanmodel();
    }
    public function index()
    {
        // return view('welcome_message');
        return view('listrik/home');
    }
    public function save()
    {
        // dd($this->request->getVar());
        // $data = [
        //     'username' => $username,
        //     'password'  => $password,
        //     'nomor_kwh'  => $nomor_kwh,
        //     'nama_pelanggan' => $nama_pelanggan,
        //     'alamat' => $alamat,
        //     'id_tarif' => $id_tarif
        // ];

        // $this->db->table('mytable')->insert($data);
        $this->akunmodel->save([
            'username' => $this->request->getVar('username'),
            'password' => $this->request->getVar('password'),
            'nomor_kwh' => $this->request->getVar('nomor_kwh'),
            'nama_pelanggan' => $this->request->getVar('nama_pelanggan'),
            'alamat' => $this->request->getVar('alamat'),
            'id_tarif' => $this->request->getVar('daya')
        ]);
        session()->setFlashdata('pesan', 'Akun Berhasil Dibuat');

        return redirect()->to('/listrik');
    }
    public function registrasi()
    {
        $tarif = $this->tarifmodel->findAll();
        $data = [
            'tarif' => $tarif
        ];
        return view('Listrik/registrasi', $data);
    }
    public function login()
    {
        $akun = $this->akunmodel->findAll();
        $data = [
            'akun' => $akun
        ];
        return view('Listrik/login', $data);
    }
    public function beranda()
    {

        return view('listrik/beranda');
    }
    public function ceklogin()
    {
        // $akun = $this->akunmodel->findAll();
        $pass = $this->request->getPost('password');
        $user = $this->request->getPost('username');
        $cek = $this->akunmodel->get_data($user, $pass);

        if (($cek['username'] == $user) && ($cek['password'] == $pass)) {
            // if (($cek['id_tarif'] == $data['id_tarif'])) {
            // }
            session()->set('id_pelanggan', $cek['id_pelanggan']);
            session()->set('nama_pelanggan', $cek['nama_pelanggan']);
            session()->set('username', $cek['username']);
            session()->set('alamat', $cek['alamat']);
            session()->set('nomor_kwh', $cek['nomor_kwh']);
            session()->set('daya', $cek['id_tarif']);
            return view('/listrik/beranda');
        }
        session()->setFlashdata('gagal', 'username / password salah');
        return view('/listrik/login');
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/listrik/login');
    }
    public function profile()
    {
        $tarif = $this->tarifmodel->findAll();
        $data = [
            'tarif' => $tarif,
        ];
        return view('/listrik/profile', $data);
    }
    public function penggunaanlistrik()
    {
        $penggunaan = $this->penggunaanmodel->findAll();
        $data = [
            'penggunaan' => $penggunaan
        ];
        return view('/listrik/penggunaanlistrik', $data);
    }
    public function tambah_penggunaan()
    {
        $penggunaan = $this->penggunaanmodel->findAll();
        $data = [
            'penggunaan' => $penggunaan
        ];
        return view('/listrik/tambah-penggunaan', $data);
    }
    public function tambahP()
    {
        $this->penggunaanmodel->save([
            'id_pelanggan' => $this->request->getVar('id_pelanggan'),
            'bulan' => $this->request->getVar('bulan'),
            'tahun' => $this->request->getVar('tahun'),
            'meter_awal' => $this->request->getVar('meter_awal'),
            'meter_akhir' => $this->request->getVar('meter_akhir')
        ]);
        session()->setFlashdata('pesan', 'Data Penggunaan Berhasil Dibuat');

        dd($this->request->getVar());
        // return redirect()->to('/listrik/penggunaanListrik');
    }
    public function deleteP($id)
    {
        $this->penggunaanmodel->delete($id);
        return redirect()->to('/listrik/penggunaanListrik');
    }
}
