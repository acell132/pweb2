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

        $full_name = $this->request->getPost('full_name');
        $password_hash = $this->request->getPost('password_hash');

        $user = $userModel->where('full_name', $full_name)
                          ->orWhere('email', $full_name)
                          ->first();

        if ($user) {
            if (password_verify($password_hash, $user['password_hash'])) {
                $session->set([
                    'user_id' => $user['user_id'],
                    'full_name' => $user['full_name'],
                    'email' => $user['email'],
                ]);
                return redirect()->to('/');
            } else {
                return redirect()->back()->with('error', 'Password Salah!');
            }
        } else {
            return redirect()->back()->with('error', 'Akun Tidak Ditemukan!');
        }
    }
}
