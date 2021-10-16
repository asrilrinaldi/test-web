<?php

namespace App\Models;

use CodeIgniter\Controller;
use CodeIgniter\Model;

class M_Teacher extends Model
{
    protected $table = 'mst_teacher';
    public function __construct()
    {
        $this->db = db_connect();
        $this->builder = $this->db->table($this->table);
    }

    public function getAllData()
    {
        return $this->db->table('mst_teacher')->get()->getResultArray();
    }
    public function tambah($data)
    {
        return $this->db->table('mst_teacher')->insert($data);
    }
    public function hapus($id)
    {
        return $this->db->table('mst_teacher')->delete(['id' => $id]);
    }
    public function edit($data, $id)
    {
        return $this->builder->update($data, ['id' => $id]);
    }
}
