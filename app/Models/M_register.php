<?php

namespace App\Models;

use CodeIgniter\Model;

class M_register extends Model
{
    
    protected $table                = 'data_register';
    protected $primaryKey           = 'user';
    protected $allowedFields        = ['user','password'];
    

    // Dates
    

}