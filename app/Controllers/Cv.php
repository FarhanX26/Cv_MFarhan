<?php

namespace App\Controllers;

use App\Models\ProfilModel;
use App\Models\PendidikanModel;
use App\Models\PengalamanModel;
use App\Models\KeahlianModel;

class Cv extends BaseController
{
    public function index()
    {
        // Inisialisasi Models
        $profilModel = new ProfilModel();
        $pendidikanModel = new PendidikanModel();
        $pengalamanModel = new PengalamanModel();
        $keahlianModel = new KeahlianModel();

        // Ambil data
        $data['profil'] = $profilModel->find(1); 
        $data['pendidikan'] = $pendidikanModel->orderBy('tanggal_mulai', 'DESC')->findAll();
        $data['pengalaman'] = $pengalamanModel->orderBy('tanggal_mulai', 'DESC')->findAll();

        // ---- PERUBAHAN BESAR DI SINI ----
        // 1. Ambil semua keahlian
        $keahlian_backend = $keahlianModel->where('kategori', 'Backend')->findAll();
        $keahlian_frontend = $keahlianModel->where('kategori', 'Frontend')->findAll();
        $keahlian_database = $keahlianModel->where('kategori', 'Database')->findAll();

        // 2. Gabungkan semua keahlian jadi satu array
        $all_skills = array_merge($keahlian_backend, $keahlian_frontend, $keahlian_database);

        // 3. Buat array baru dengan persentase
        $data['skills_with_level'] = [];
        foreach ($all_skills as $skill) {
            $percentage = 50; // Default untuk "Dasar"
            if ($skill['level'] == 'Mahir') {
                $percentage = 90;
            } elseif ($skill['level'] == 'Menengah') {
                $percentage = 75;
            }
            
            $data['skills_with_level'][] = [
                'nama' => $skill['nama_keahlian'],
                'level' => $skill['level'],
                'percentage' => $percentage
            ];
        }
        // ---------------------------------

        return view('cv_view', $data);
    }
}