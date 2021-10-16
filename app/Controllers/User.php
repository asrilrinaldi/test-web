<?php

namespace App\Controllers;


use App\Models\M_Student;
use App\Models\M_Teacher;



class User extends BaseController
{
    /**
     * Instance of the main Request object.
     *
     * @var IncomingRequest
     */
    protected $request;
    public function __construct()
    {
        $this->model = new M_Teacher;
        $this->model2 = new M_Student;
    }
    public function index()
    {
        if (session('level') == 1) {
            return redirect()->to(site_url('admin'));
        }

        $data = [
            'judul' => 'User',
            'teacher' => $this->model->getAllData(),
            'student' => $this->model2->getAllData()
        ];

        echo view('templates/header', $data);
        echo view('templates/top_bar', $data);
        echo view('user/index', $data);
        echo view('templates/modal', $data);
        echo view('templates/footer');
    }
}
