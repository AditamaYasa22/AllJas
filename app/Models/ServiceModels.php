<?php

namespace App\Models;

use CodeIgniter\Model;

class ServiceModels extends Model
{
    protected $table = 'services';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'desc', 'price', 'image_url'];
}
