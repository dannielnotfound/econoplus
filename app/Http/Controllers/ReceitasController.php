<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReceitasController extends Controller
{
    public function index()
    {
        return view('receitas.index');
    }
}
