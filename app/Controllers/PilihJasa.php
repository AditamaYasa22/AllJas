<?php

namespace App\Controllers;


class PilihJasa extends BaseController
{
    /**
     * Menampilkan halaman pilih jasa.
     *
     * @return string
     */
    public function PilihJasa()
    {   
        if (!session()->has('logged_in') || !session()->get('logged_in')) {
            return redirect()->to('/login')->with('error', 'Anda harus login untuk melanjutkan!');
        }

        $name = $this->request->getGet('name'); // Ambil parameter 'name' dari URL
        $desc = $this->request->getGet('desc');
        $price = $this->request->getGet('price'); // Ambil parameter 'desc' dari URL
        $image = $this->request->getGet('image'); // Ambil parameter 'image' dari URL

        // Validasi parameter
        if (!$name || !$desc || !$price || !$image || !is_numeric($price)) {
            return redirect()->to('/')->with('error', 'Data tidak lengkap!');
        }
    
        // Deteksi jika image sudah mengandung base_url
        if (!filter_var($image, FILTER_VALIDATE_URL)) {
            $image = base_url('assets/images/' . $image);
        }
        // Kirim data ke View
        return view('PilihJasa', [
            'name' => $name,
            'desc' => $desc,
            'price' => $price,
            'image' =>$image
        ]);
    }

    /**
     * Menangani form submit dari halaman Pilih Jasa.
     *
     * @return string
     */
    public function submit()
    {   
        if (!session()->has('logged_in') || !session()->get('logged_in')) {
            return redirect()->to('/login')->with('error', 'Anda harus login untuk melanjutkan!');
        }



        $date = $this->request->getPost('date');
        $time = $this->request->getPost('time');
        $gender = $this->request->getPost('gender');
        $offer = $this->request->getPost('offer');
        $serviceName = $this->request->getPost('service_name');
        $servicePrice = $this->request->getPost('service_price');

        if (!$date || !$time || !$gender || !$serviceName || !$servicePrice) {
            return redirect()->back()->with('error', 'Harap lengkapi semua data!');
        }


        // Simpan ke database (contoh)
        $db = \Config\Database::connect();
        $builder = $db->table('pesanan');
        $data = [
            'service_name' => $serviceName,
            'service_price' => $servicePrice,
            'date' => $date,
            'time' => $time,
            'gender' => $gender,
            'offer' => $offer,
            'user_id' => session()->get('id'), // Ambil ID pengguna dari session
            'created_at' => date('Y-m-d H:i:s')
        ];

        // Redirect ke halaman pembayaran atau konfirmasi
        if ($builder->insert($data)) {
            return redirect()->to('DetailPembayaran')->with('success', 'Pesanan Anda berhasil disubmit!');
        }

            return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan data!');
    }
}
