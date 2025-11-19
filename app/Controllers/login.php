<?php

namespace App\Controllers;
use App\Models\UserModel;

class Login extends BaseController
{
    public function index()
    {
        return view('auth/login');
    }

    public function auth()
    {
        $session = session();
        $userModel = new UserModel();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $userModel->where('username', $username)
                          ->orWhere('email', $username)
                          ->first();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $session->set('username', $user['username']);
                return redirect()->to('/');
            } else {
                return redirect()->back()->with('error', 'Password Salah!');
            }
        } else {
            return redirect()->back()->with('error', 'Akun Tidak Ditemukan!');
        }
    }
}
