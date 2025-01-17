<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\PesananModel;

class Profile extends BaseController
{
    public function index()
    {
        // Ambil ID pengguna dari session
        $userId = session()->get('id');

        if (!$userId) {
            // Jika pengguna belum login
            return redirect()->to('/login')->with('error', 'Silakan login untuk mengakses profil Anda.');
        }

        // Ambil data pengguna dari database
        $userModel = new UserModel();
        $user = $userModel->find($userId);

        if (!$user) {
            // Jika pengguna tidak ditemukan
            return redirect()->to('/')->with('error', 'Pengguna tidak ditemukan.');
        }

        $pesananModel = new PesananModel();
        $orders = $pesananModel->where('user_id', $userId)->findAll();

        // Kirim data ke view
        return view('Profile', [
            'username' => $user['username'] ?? '-',
            'fullname' => $user['fullname'] ?? '-',
            'email' => $user['email'] ?? '-',
            'whatsapp' => $user['whatsapp'] ?? '-',
            'address' => $user['address'] ?? '-',
            'orders' => $orders,
        ]);
  
    }
    public function edit()
    {
        // Ambil data pengguna yang sedang login
        $userId = session()->get('id');
        $userModel = new UserModel();
        $user = $userModel->find($userId);

        // Kirim data ke view
        return view('EditProfile', ['user' => $user]);
    }

    public function update()
    {
        $userId = session()->get('id');
        $userModel = new UserModel();

        // Validasi input
        $data = $this->request->getPost([
            'username',
            'fullname',
            'email',
            'phone',
            'address',
        ]);

        // Perbarui data pengguna
        $userModel->update($userId, [
            'username' => $data['username'],
            'fullname' => $data['fullname'],
            'email'    => $data['email'],
            'whatsapp' => $data['phone'],
            'address'  => $data['address'],
        ]);

        return redirect()->to('/Profile')->with('message', 'Profil berhasil diperbarui!');
    }
}
