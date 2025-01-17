<?php

namespace App\Controllers;

class DetailPembayaran extends BaseController
{
    public function index()
    {
        // Hubungkan ke database
        $db = \Config\Database::connect();
        $builder = $db->table('pesanan');

        // Ambil data pesanan terakhir berdasarkan user_id
        $order = $builder->where('user_id', session()->get('id'))
                         ->orderBy('created_at', 'DESC')
                         ->get()
                         ->getRowArray();

        // Jika tidak ada pesanan, redirect ke halaman layanan
        if (!$order) {
            return redirect()->to('/Layanan')->with('error', 'Tidak ada pesanan yang ditemukan!');
        }

        // Kirim data pesanan ke view pembayaran
        return view('DetailPembayaran', [
            'service_name' => $order['service_name'],       // Nama jasa
            'customer_name' => session()->get('username'), // Nama pelanggan dari session
            'customer_address' => 'Alamat Default',        // Alamat pelanggan (sesuaikan jika ada kolom alamat)
            'order_date' => $order['date'],                // Tanggal pesanan
            'order_time' => $order['time'],                // Waktu pesanan
            'total_price' => $order['service_price'],      // Total harga
        ]);
    }

    public function berhasil()
    {
        $data = [
            'title' => 'Pesanan Telah Dibuat',
        ];

        return view('/Berhasil', $data);
    }
}
