<?php

namespace App\Models;

use CodeIgniter\Model;

class M_User extends Model
{
    protected $table = 'mst_student';
    protected $allowedFields = ['nama', 'password', 'level'];
}
