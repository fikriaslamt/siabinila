<?php

namespace App\Models;

use CodeIgniter\Model;

class M_data_notif extends Model
{
    
    protected $table                = 'data_notif';
    protected $primaryKey           = 'untuk';
    protected $allowedFields        = ['untuk','oleh','subjek','isi_pesan'];
    
}