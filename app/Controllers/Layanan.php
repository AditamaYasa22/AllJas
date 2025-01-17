<?php

namespace App\Controllers;

use App\Models\ServiceModels;

class Layanan extends BaseController
{
    public function index()
    {
        $serviceModel = new ServiceModels();
        $services = $serviceModel->findAll(); // Ambil semua layanan dari database

        dd($services);

        return view('layanan', ['services' => $services]); // Kirim data ke view
        
    }
}
