<?php

namespace App\Controllers;


use CodeIgniter\Controller;
use App\Models\M_Admin;

class Admin extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var IncomingRequest
     */
    protected $request;

    public function __construct()
    {
        $this->model = new M_Admin;
    }

    public function index()
    {
        $data = [
            'judul' => 'Data Student',
            'mst_student' => $this->model->getAllData()
        ];
        echo view('tampilan/header', $data);
        echo view('tampilan/top_bar', $data);
        echo view('admin/index', $data);
        echo view('tampilan/footer', $data);
    }
}
