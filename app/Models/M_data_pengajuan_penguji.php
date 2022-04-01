<?php

namespace App\Models;

use CodeIgniter\Model;

class M_data_pengajuan_penguji extends Model
{
    protected $table = "data_pengajuan_penguji";
    protected $primaryKey           = 'npm';
    protected $allowedFields        = ['npm','nama','judul','konsentrasi'];
}
