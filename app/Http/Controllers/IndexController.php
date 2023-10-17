<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        // Retorna view home (landing page antes do login / registro)

        return view('home');
    }
}
