<?php

namespace App\Models;

use CodeIgniter\Model;

class M_data_skripsi extends Model
{
    protected $table = 'data_skripsi';
    protected $primaryKey     = 'npm';
    protected $allowedFields  =  ['npm','nama','judul','dospem1','dospem2','date','date_judul',
                                'date_usul','date_hasil','date_kompre','status','time',
                                'time_judul-usul','time_usul-hasil','time_hasil-kompre','time_total'];
}
