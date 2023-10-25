<?php

namespace App\Http\Controllers;

use App\Models\Despesa;
use Illuminate\Http\Request;

class DespesasController extends Controller
{

    public function index(Despesa $model)
    {

        $data = $model->all();
        
        return view('despesas.index', ['data' => $data]);


    }


    public function create()
    {
        return view('despesas.create');
    }


    public function store(Despesa $model, Request $request)
    {   
 
        $model->create($request->all());


        $data = $model->all();
        
        return view('despesas.index', ['data' => $data]);
   
    }

    /**
     * Display the specified resource.
     */
    public function show(Despesa $model, $despesaId)
    {   

        if(!$model =  $model->find($despesaId)){
            return redirect()->back();
        }
        
        return view('despesas.show', compact('id', 'despesaId'));
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
