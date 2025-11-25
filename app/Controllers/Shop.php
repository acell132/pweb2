<?php

namespace App\Controllers;

class Shop extends BaseController
{
    public function index()
    {
         return view('Shop/index');
    }
    public function detail()
    {
         return view('Shop/detail');
    }
    public function cart()
    {
         return view('Shop/cart');
    }
}


