<?php

namespace App\Controllers;

use App\Models\M_Admin;
use App\Models\M_User;


class Login extends BaseController
{
    /**
     * Instance of the main Request object.
     *
     * @var IncomingRequest
     */
    protected $request;


    public function index()
    {

        $data = [
            'judul' => 'Login'
        ];
        helper(['form']);

        echo view('templates/header', $data);
        echo view('login/index', $data);
        echo view('templates/footer');
    }

    public function auth()
    {

        $session = session();
        $userModel = new M_User();
        $adminModel = new M_Admin();

        $nama = $this->request->getPost('nm');
        $password = $this->request->getPost('pw');

        $user = $userModel->where('nama', $nama)->first();
        $admin = $adminModel->where('nama', $nama)->first();

        if ($user) {
            if (empty($user) or empty($password)) {
                session()->setFlashdata('pesan', 'Nama atau Password belum di isi');
                return redirect()->to('/');
            }
            if ($user['password'] != $password) {
                session()->setFlashdata('pesan', 'Nama atau Password Salah');
                return redirect()->to('/');
            }
            session()->set('nama', $nama);

            $ses_user = [
                'id'       => $user['id'],
                'nama'     => $user['nama'],
                'level'     => $user['level'],
                'logged_in'     => TRUE
            ];
            $session->set($ses_user);
            return redirect()->to('/admin');
        } else {
            if (empty($admin) or empty($password)) {
                session()->setFlashdata('pesan', 'Nama atau Password belum di isi');
                return redirect()->to('/');
            }
            if ($admin['password'] != $password) {
                session()->setFlashdata('pesan', 'Nama atau Password Salah');
                return redirect()->to('/');
            }
            session()->set('nama', $nama);

            $ses_user = [
                'id'       => $admin['id'],
                'nama'     => $admin['nama'],
                'level'     => $admin['level'],
                'logged_in'     => TRUE
            ];
            $session->set($ses_user);
            return redirect()->to('/user');
        }
    }
}
