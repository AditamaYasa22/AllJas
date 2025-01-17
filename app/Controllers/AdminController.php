<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\PesananModel;

class AdminController extends BaseController
{
    public function index()
    {
        $userModel = new UserModel();
        $pesananModel = new PesananModel();

        // Ambil data pengguna
        $users = $userModel->findAll();

        // Ambil data pesanan dengan relasi ke tabel users
        $pesanan = $pesananModel->select('pesanan.*, users.username')
                                ->join('users', 'users.id = pesanan.user_id')
                                ->findAll();

        // Kirim data ke view
        return view('Dashboard', [
            'title' => 'Dashboard',
            'users' => $users,
            'pesanan' => $pesanan,
        ]);
    }
}
