<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users'; // Nama tabel
    protected $primaryKey = 'id'; // Primary Key
    protected $allowedFields = ['username', 'email', 'password', 'fullname', 'address', 'whatsapp']; // Kolom yang diizinkan diisi
    protected $useTimestamps = true; // Aktifkan timestamp untuk created_at & updated_at
}
