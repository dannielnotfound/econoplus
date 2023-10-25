@extends('layouts.app')
@section('content')

.content
<h1 class="text text-white">Cadastrar nova Despesa</h1>

<form class="text text-white" action="{{route('despesas.store')}}" method="post">
    @csrf
    <div class="form-group">
        <input  class="form-control" type="text" name='descricao' placeholder="Descricao">

    </div>
    

    <div class="form-group">
        <input  class="form-control" type="number" name='valor'  placeholder="Valor">
    </div>
    
    <div class="form-group">
        <label for="vencimento">Data de Vencimento</label>
        <input  class="form-control" type="date" name="vencimento">
    </div>
    
    <div class="form-group">
        <label for="status">Status</label>
        <select  multiple class="form-control" name="status">
            <option value="1">Pendente</option>
            <option value="2">Pago</option>
            <option value="3">Em atraso</option>
        </select>
    </div>
    
    <div class="form-group">
        <label for="observacao">Anotações</label>
        <textarea class="form-control" name="observacao" id="observacao"  rows="3"></textarea>
    </div>
    
    
    <div class="form-group">
        <input class='form-control' type="submit" value="Cadastrar">
    </div>
</form>
   

@endsection

