<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvestimentosController extends Controller
{
    public function index()
    {
        return view('investimentos.index');
    }
}
