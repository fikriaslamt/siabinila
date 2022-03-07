<?php

namespace App\Models;

use CodeIgniter\Model;

class M_seminar_usul extends Model
{
    protected $table = 'data_seminar_usul';
    protected $primaryKey     = 'npm';
    protected $allowedFields  =  ['npm','nama','judul','dospem1','dospem2','penguji_u','jam','tanggal','nilai_d1','nilai_d2','nilai_pu'];
}
