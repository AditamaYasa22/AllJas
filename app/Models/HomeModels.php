<?php

namespace App\Models;

use CodeIgniter\Model;

class HomeModels extends Model
{
    protected $table = 'orders';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'desc', 'price', 'image_url'];
}
