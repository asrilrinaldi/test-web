<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'Login'
        ];

        echo view('login/index', $data);
    }
}
