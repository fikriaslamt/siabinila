<?php

namespace App\Models;

use CodeIgniter\Model;

class M_register extends Model
{
    
    protected $table                = 'akun_register';
    protected $primaryKey           = 'user';
    protected $allowedFields        = ['user','password','nama','role','jenis_kelamin','email'];
    
}