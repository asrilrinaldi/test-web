<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Admin extends Model
{
    protected $table = 'mst_teacher';
    protected $allowedFields = ['nama', 'password', 'level'];
}
