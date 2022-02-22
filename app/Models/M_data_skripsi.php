<?php

namespace App\Models;

use CodeIgniter\Model;

class M_data_skripsi extends Model
{
    protected $table = 'data_skripsi';
    protected $primaryKey     = 'npm';
    protected $allowedFields  =  ['npm','nama','judul','dospem1','dospem2','penguji_u','penguji_p','date','date_judul',
                                'date_usul','date_hasil','date_kompre','status','time', 'konsen',
                                'time_judul_usul','time_usul_hasil','time_hasil_kompre','time_total'];
}
