<?php

namespace App\Models;

use CodeIgniter\Model;

class PesananModel extends Model
{
    protected $table = 'pesanan';
    protected $primaryKey = 'id';
    protected $allowedFields = ['user_id', 'service_name', 'service_price', 'date', 'time', 'gender', 'offer'];
}
