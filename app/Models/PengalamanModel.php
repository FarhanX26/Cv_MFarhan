<?php

namespace App\Models;

use CodeIgniter\Model;

class PengalamanModel extends Model
{
    protected $table            = 'pengalaman';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['judul', 'posisi', 'tanggal_mulai', 'tanggal_selesai', 'deskripsi'];
}