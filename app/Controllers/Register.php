<?php

namespace App\Controllers;
use App\Models\UserModel;

class Register extends BaseController
{
    public function index()
    {
        return view('auth/register');
    }

    public function doRegister()
    {
        $userModel = new UserModel();

        $username = $this->request->getPost('username');
        $email    = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $confirm  = $this->request->getPost('confirm');

        // Validasi password dan confirm
        if ($password !== $confirm) {
            return redirect()->back()->with('error', 'Password tidak sama!');
        }

        // Cek apakah email atau username sudah ada
        if ($userModel->where('email', $email)->orWhere('username', $username)->first()) {
            return redirect()->back()->with('error', 'Email atau username sudah digunakan!');
        }

        // Simpan user (PASSWORD HASH bukan MD5!!)
        $userModel->insert([
            'username' => $username,
            'email'    => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT),
        ]);

        return redirect()->to('/login')->with('success', 'Register berhasil! Silahkan login.');
    }
}
