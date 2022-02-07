<?php

namespace App\Models;

use CodeIgniter\Model;

class M_profil_dosen extends Model
{
    
    protected $table                = 'profil_dosen';
    protected $primaryKey           = 'nip';
    protected $allowedFields        = ['nip','nama', 'foto', 'grup'];

    // Dates
    

}