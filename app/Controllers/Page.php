<?php


namespace App\Controllers;

class Page extends BaseController
{
    function __construct()
    {

        //validasi jika user belum login
        if ($this->session->userdata('masuk') != TRUE) {
            $url = base_url();
            redirect($url);
        }
    }

    function index()
    {
        $this->load->view('/user');
    }

    function data_student()
    {
        // function ini hanya boleh diakses oleh admin dan dosen
        if ($this->session->userdata('akses') == '1' || $this->session->userdata('akses') == '2') {
            $this->load->view('v_mahasiswa');
        } else {
            echo "Anda tidak berhak mengakses halaman ini";
        }
    }

    function data_teacher()
    {
        // function ini hanya boleh diakses oleh admin dan dosen
        if ($this->session->userdata('akses') == '1' || $this->session->userdata('akses') == '2') {
            $this->load->view('v_input_nilai');
        } else {
            echo "Anda tidak berhak mengakses halaman ini";
        }
    }
}
