<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AuthController extends BaseController
{
    function __construct()
    {
    helper('form');
    }
    public function login()
{
    if ($this->request->getPost()) {
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $dataUser = [
            'username' => 'rasyidah',
            'password' => md5('123'),
            'role' => 'admin',
            'email' => '111202415721@mhs.dinus.ac.id'
        ]; // passw 123

        if ($username == $dataUser['username']) {
            if (md5($password) == $dataUser['password']) {
                date_default_timezone_set('Asia/Jakarta');

                session()->set([
                'username' => $dataUser['username'],
                'role' => $dataUser['role'],
                'email' => $dataUser['email'],
                'login_time' => date('Y-m-d H:i:s'),
                'isLoggedIn' => true
            ]);

                return redirect()->to(base_url('/'));
            } else {
                session()->setFlashdata('failed', 'Username & Password Salah');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('failed', 'Username Tidak Ditemukan');
            return redirect()->back();
        }
    } else {
        return view('v_login');
    }
    }
    public function logout()
{
    session()->destroy();
    return redirect()->to('login');
}
}
