<?php

namespace App\Controllers;

use App\Models\UserModel;

class LoginRegister extends BaseController
{
    public function register()
    {
        return view('auth/register', ['title' => 'Register']);
    }

    public function store()
    {
        $userModel = new UserModel();

        $username = $this->request->getPost('username');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $confirmPassword = $this->request->getPost('pass_confirm');

        // Validasi input
        if ($password !== $confirmPassword) {
            return redirect()->back()->with('error', 'Password dan konfirmasi password tidak cocok.')->withInput();
        }

        // Hash password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Simpan data ke database
        $userModel->save([
            'username' => $username,
            'email' => $email,
            'password' => $hashedPassword,
        ]);

        return redirect()->to('/login')->with('message', 'Registrasi berhasil! Silakan login.');
    }

    public function login()
    {
        return view('auth/login', ['title' => 'Login']);
    }

    public function authenticate()
{
    $userModel = new UserModel();

    // Ambil input dari form
    $login = trim($this->request->getPost('login')); // Ambil input dari form dengan name="login"
    $password = $this->request->getPost('password'); // Ambil input dari form dengan name="password"

    // Debugging input
    if (!$login || !$password) {
        return redirect()->back()->with('error', 'Field login dan password harus diisi.')->withInput();
    }

    // Cari pengguna berdasarkan email atau username
    $user = $userModel->where('email', $login)
                      ->orWhere('username', $login)
                      ->first();

    // Debugging user data
    if (!$user) {
        return redirect()->back()->with('error', 'Pengguna tidak ditemukan.')->withInput();
    }

    // Verifikasi password
    if (!password_verify($password, $user['password'])) {
        return redirect()->back()->with('error', 'Password salah.')->withInput();
    }

    // Set session jika login berhasil
    session()->set([
        'id' => $user['id'],
        'username' => $user['username'],
        'email' => $user['email'],
        'role' => $user['role'],
        'logged_in' => true,
    ]);
    

    // Ambil redirect URL dari session (jika ada)
    $lastUrl = session()->get('last_url');
    session()->remove('last_url'); // Hapus URL redirect setelah digunakan

    if ($user['role'] === 'admin') {
        session()->set('role', 'admin');
        return redirect()->to('/Dashboard'); // Halaman admin
    } else {
        session()->set('role', 'user');
        return redirect()->to('/'); // Halaman user biasa
    }

    // Redirect ke halaman yang diminta sebelumnya atau ke dashboard
}


    public function logout()
    {   
        $lastUrl = previous_url(); // Mengambil URL halaman sebelumnya
        session()->set('last_url', $lastUrl);

    // Hancurkan session
    session()->destroy();

    // Redirect ke halaman login dengan pesan
    return redirect()->to('/')->with('message', 'Anda telah logout.');
    }

    public function forgotpassword()
    {
        return view('auth/forgot', ['title' => 'forgot']);
    }

}
