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

        $full_name = $this->request->getPost('full_name');
        $email    = $this->request->getPost('email');
        $password_hash = $this->request->getPost('password_hash');
        $confirm  = $this->request->getPost('confirm');

        // Validasi password dan confirm
        if ($password_hash !== $confirm) {
            return redirect()->back()->with('error', 'Password tidak sama!');
        }

        // Cek apakah email atau full_name sudah ada
        if ($userModel->where('email', $email)->orWhere('full_name', $full_name)->first()) {
            return redirect()->back()->with('error', 'Email atau full_name sudah digunakan!');
        }

        // Simpan user (PASSWORD HASH bukan MD5!!)
        $userModel->insert([
            'full_name' => $full_name,
            'email'    => $email,
            'password_hash' => password_hash($password_hash, PASSWORD_DEFAULT),
            'role' => 'customer',
        ]);

        return redirect()->to('/login')->with('success', 'Register berhasil! Silahkan login.');
    }
}
