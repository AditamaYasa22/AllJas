<?php

namespace App\Controllers;

use App\Models\HomeModels;
use App\Models\HomeServicesModel;

class Home extends BaseController
{
    /**
     * Menampilkan data layanan untuk halaman home
     */
    public function index()
    {
        // Memanggil model untuk mendapatkan data dari tabel home_services
        $homeModels = new HomeModels();
        $services = $homeModels->findAll(); // Ambil semua data dari tabel home_services

        dd($services);

        // Kirim data ke view 'home'
        return view('home', ['services' => $services]);
    }

    /**
     * Menampilkan detail pilihan jasa
     */
    public function PilihJasa()
    {
        // Ambil parameter dari URL
        $name = $this->request->getGet('name');
        $desc = $this->request->getGet('desc');
        $price = $this->request->getGet('price');
        $image = $this->request->getGet('image');

        // Validasi parameter
        if (!$name || !$desc || !$price || !$image || !is_numeric($price)) {
            return redirect()->to('/')->with('error', 'Data tidak lengkap!');
        }

        // Kirim data ke view 'PilihJasa'
        $imageName = basename($image);
        $imageUrl = base_url('assets/images/' . $imageName);
        return view('PilihJasa', [
            'name' => $name,
            'desc' => $desc,
            'price' => $price,
            'image' => $imageUrl
        ]);
    }
}
