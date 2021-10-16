<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_Auth;
use App\Models\M_Student;
use App\Models\M_User;
use App\Models\M_Teacher;
use App\Models\UsersModel;

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
        $this->model = new M_Teacher;
        // $this->model = new M_Student;
    }
    public function index()
    {
        if (session('level') == 2) {
            return redirect()->to(site_url('user'));
        }

        $data = [
            'judul' => 'Admin',
            'teacher' => $this->model->getAllData(),
            // 'student' => $this->model2->getAllData()
        ];

        echo view('templates/header', $data);
        echo view('templates/top_bar', $data);
        echo view('admin/index', $data);
        echo view('templates/footer');
    }

    public function tambah()
    {
        $data = [
            'id' => $this->request->getPost('id'),
            'nama' => $this->request->getPost('nama'),
            'password' => $this->request->getPost('password'),
            'level' => $this->request->getPost('level')

        ];

        //INSERT
        $success = $this->model->tambah($data);
        if ($success) {
            session()->setFlashdata('pesan', 'Berhasil di Tambahkan');
            return redirect()->to(base_url('/admin'));
        }
    }

    public function edit()
    {
        $id = $this->request->getPost('id');
        $data = [
            'nama' => $this->request->getPost('nama'),
            'password' => $this->request->getPost('password'),
            'level' => $this->request->getPost('level')
        ];

        //INSERT

        $success = $this->model->edit($data, $id);
        if ($success) {
            session()->setFlashdata('pesan', 'Berhasil di Edit');
            return redirect()->to(base_url('/admin'));
        }
    }

    public function hapus()
    {

        $id = $this->request->getPost('id'); // get data input form
        $success = $this->model->hapus($id); //get query
        if ($success) {
            session()->setFlashdata('pesan', 'Berhasil di Hapus');
            return redirect()->to(base_url('/admin'));
        }
    }
    public function logout() //Logout
    {
        $session = session();
        $session->destroy(); //Hapus sesi
        return redirect()->to('/');
    }
}
