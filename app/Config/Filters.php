<?php

namespace Config;

use App\Filters\Auth;
use App\Filters\FilterAdmin;
use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Filters\CSRF;
use CodeIgniter\Filters\DebugToolbar;
use CodeIgniter\Filters\Honeypot;

class Filters extends BaseConfig
{
    /**
     * Configures aliases for Filter classes to
     * make reading things nicer and simpler.
     *
     * @var array
     */
    public $aliases = [
        'csrf'     => CSRF::class,
        'toolbar'  => DebugToolbar::class,
        'honeypot' => Honeypot::class,
        'auth' => Auth::class,



    ];

    /**
     * List of filter aliases that are always
     * applied before and after every request.
     *
     * @var array
     */
    public $globals = [
        'before' => [
            'auth' => ['except' => [
                'login', 'login/*',
            ]],
            'honeypot',
            'csrf' => ['except' => [
                '/login/auth',
                '/admin/tambahTeacher',
                '/admin/tambahStudent',
                '/admin/editTeacher',
                '/admin/editStudent',
                '/admin/hapusTeacher',
                '/admin/hapusStudent',
                '/admin/logout'

            ]],

        ],
        'after' => [
            'auth' => ['except' => [
                'admin', 'admin/*',
                'user', 'user*/',
            ]],
            'toolbar',
            // 'honeypot',
        ],
    ];

    /**
     * List of filter aliases that works on a
     * particular HTTP method (GET, POST, etc.).
     *
     * Example:
     * 'post' => ['csrf', 'throttle']
     *
     * @var array
     */
    public $methods = [];

    /**
     * List of filter aliases that should run on any
     * before or after URI patterns.
     *
     * Example:
     * 'isLoggedIn' => ['before' => ['account/*', 'profiles/*']]
     *
     * @var array
     */
    public $filters = [];
}
