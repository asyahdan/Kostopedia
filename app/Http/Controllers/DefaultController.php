<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DefaultController extends Controller
{
    public function index()
    {
        // Tambahkan logika sesuai kebutuhan
        return view('User.home'); // Misalnya, arahkan ke halaman welcome.blade.php
    }
}
