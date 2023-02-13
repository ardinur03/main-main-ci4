<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\M_User;

class C_Auth extends BaseController
{

    public function index()
    {
        return view('auth/login');
    }

    public function login()
    {
        $model = new M_User();

        $email = $this->request->getPost('email_or_username');
        $password = $this->request->getPost('password');

        $user = $model->findByEmailOrUsername($email);

        if (!$user) {
            return redirect()->to('/login')->with('error', 'Email atau Password salah');
        }

        if (!$model->verifyPassword($password, $user['password'])) {
            return redirect()->to('/login')->with('error', 'Email atau Password salah');
        }

        session()->set('user_id', $user['id']);
        session()->set('user_name', $user['username']);
        session()->set('user_email', $user['email']);
        session()->set('isLoggedIn', true);
        return redirect()->to('/');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
