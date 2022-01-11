<?php

namespace App\Models;

use CodeIgniter\Model;

class M_akun extends Model
{
    protected $table = "akun";
    protected $primaryKey           = 'user';
    protected $allowedFields        = ['user','password','nama','role'];
}
