<?php

namespace App\Models;

use CodeIgniter\Model;

class M_akun_admin extends Model
{
    protected $table = "akun_admin";
    protected $primaryKey           = 'admin';
    protected $allowedFields        = ['admin','password'];
   
}
