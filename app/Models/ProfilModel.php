<?php

namespace App\Models;

use CodeIgniter\Model;

class ProfilModel extends Model
{
    // Asumsikan nama tabel Anda 'profil'. Jika beda, ubah di sini.
    protected $table            = 'profil'; 
    protected $primaryKey       = 'id';
    
    // Ini yang paling penting, sesuaikan dengan screenshot Anda
    protected $allowedFields    = [
        'nama', 
        'ringkasan', 
        'email', 
        'telepon', 
        'url_linkedin', 
        'url_github', 
        'url_foto'
    ];
}