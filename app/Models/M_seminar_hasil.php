<?php

namespace App\Models;

use CodeIgniter\Model;

class M_seminar_hasil extends Model
{
    protected $table = 'data_seminar_hasil';
    protected $primaryKey     = 'npm';
    protected $allowedFields  =  ['npm','nama','judul','dospem1','dospem2','penguji_u','jam','tanggal','nilai_d1','nilai_d2','nilai_pu'];
}
