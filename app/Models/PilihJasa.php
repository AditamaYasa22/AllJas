<?php

namespace App\Models;

use CodeIgniter\Model;

class PilihJasa extends Model
{
    protected $table = 'services'; // Nama tabel di database
    protected $primaryKey = 'id'; // Primary key dari tabel (opsional)
    protected $allowedFields = ['name', 'desc', 'price', 'image_url']; // Kolom yang bisa diisi (opsional)

    /**
     * Fungsi untuk mendapatkan data layanan berdasarkan nama layanan.
     *
     * @param string $name Nama layanan
     * @return array|null Data layanan, atau null jika tidak ditemukan
     */
    public function getJasaByName($name)
    {
        return $this->where('name', $name)->first(); // Ambil data berdasarkan nama
    }

    /**
     * Fungsi untuk mendapatkan data layanan berdasarkan ID layanan.
     *
     * @param int $id ID layanan
     * @return array|null Data layanan, atau null jika tidak ditemukan
     */
   
}
