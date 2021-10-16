<?php

namespace App\Filters;

use CodeIgniter\Auth\Exceptions\AuthException;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;
use Config\Services;

class Auth implements FilterInterface
{
    /**
     * Checks if Honeypot field is empty, if not then the
     * requester is a bot
     *
     * @param array|null $arguments
     *
     * @throws AuthException
     */
    public function before(RequestInterface $request, $arguments = null)
    {
        // // jika user belum login
        // if (!session()->get('logged_in')) {
        //     // maka redirct ke halaman login
        //     return redirect()->to('/login');
        // }
        if (session()->get('level') == "0") {
            // maka redirct ke halaman login
            session()->setFlashdata('pesan', 'Tidak punya akses');
            return redirect()->to('login');
        }
    }

    //--------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        if (session()->get('level') == 1) {
            // maka redirct ke halaman admin
            return redirect()->to('admin');
        }
        if (session()->get('level') == 2) {
            // maka redirct ke halaman user
            return redirect()->to('user');
        }
    }
}
