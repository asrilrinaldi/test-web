<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_Student;
use App\Models\M_Teacher;


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
        $this->model2 = new M_Student;
    }
    public function index()
    {
        if (session('level') == 2) {
            return redirect()->to(site_url('user'));
        }

        $data = [
            'judul' => 'Admin',
            'teacher' => $this->model->getAllData(),
            'student' => $this->model2->getAllData()
        ];

        echo view('templates/header', $data);
        echo view('templates/top_bar', $data);
        echo view('admin/index', $data);
        echo view('templates/modal', $data);
        echo view('templates/footer');
    }

    public function tambahTeacher()
    {

        $data = [
            'id' => $this->request->getPost('id'),
            'nama'  => $this->request->getPost('nama'),
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
    public function tambahStudent()
    {

        $data = [
            'id' => $this->request->getPost('id'),
            'nama'  => $this->request->getPost('nama'),
            'password' => $this->request->getPost('password'),
            'level' => $this->request->getPost('level')

        ];

        //INSERT
        $success = $this->model2->tambah($data);
        if ($success) {
            session()->setFlashdata('pesan2', 'Berhasil di Tambahkan');
            return redirect()->to(base_url('/admin'));
        }
    }

    public function editTeacher()
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
    public function editStudent()
    {
        $id = $this->request->getPost('id');
        $data = [
            'nama' => $this->request->getPost('nama'),
            'password' => $this->request->getPost('password'),
            'level' => $this->request->getPost('level')
        ];

        //INSERT

        $success = $this->model2->edit($data, $id);
        if ($success) {
            session()->setFlashdata('pesan2', 'Berhasil di Edit');
            return redirect()->to(base_url('/admin'));
        }
    }

    public function hapusTeacher()
    {

        $id = $this->request->getPost('id');
        $success = $this->model->hapus($id);
        if ($success) {
            session()->setFlashdata('pesan', 'Berhasil di Hapus');
            return redirect()->to(base_url('/admin'));
        }
    }
    public function hapusStudent()
    {

        $id = $this->request->getPost('id');
        $success = $this->model2->hapus($id);
        if ($success) {
            session()->setFlashdata('pesan2', 'Berhasil di Hapus');
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
