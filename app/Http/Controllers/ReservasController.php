<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservasController extends Controller
{
    public function index()
    {
        return view('reservas.index');
    }
}
