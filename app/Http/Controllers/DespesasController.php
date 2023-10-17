<?php

namespace App\Http\Controllers;

use App\Models\Depesa;
use Illuminate\Http\Request;

class DespesasController extends Controller
{

    public function index()
    {
        return view('despesas.index');
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Depesa $model)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $model)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $model)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $model)
    {
        //
    }
}
