<?php

namespace App\Models;

use CodeIgniter\Model;

class PendidikanModel extends Model
{
    protected $table            = 'pendidikan';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['institusi', 'jurusan', 'tanggal_mulai', 'tanggal_selesai', 'keterangan'];
}