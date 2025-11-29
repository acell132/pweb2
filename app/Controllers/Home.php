<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $session = session();

        return view('Layout/home', [
            'user' => [
                'full_name' => $session->get('full_name'),
            ]
        ]);
    }

}
