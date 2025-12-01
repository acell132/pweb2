<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $session = session();

        return view('Layout/home', [
            'user' => [
                'user_id' => $session->get('user_id'),
                'full_name' => $session->get('full_name'),
                'email' => $session->get('email')
            ]
        ]);
    }

    public function notAuthorized()
    {
        return view('pages/not_authorized');
    }

}
