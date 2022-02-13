<?php

namespace App\Models;

use CodeIgniter\Model;

class M_profil_mahasiswa extends Model
{
    
    protected $table                = 'profil_mahasiswa';
    protected $primaryKey           = 'npm';
    protected $allowedFields        = ['npm','nama','prodi','jenis_kelamin', 'status','angkatan','email','no_hp','foto'];
    protected $row_array           = 'array';

    // Dates
    

}