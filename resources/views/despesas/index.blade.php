@extends('layouts.app')
@section('content')
<h1 class="text-white">Despesas</h1>
<a href="{{route('despesas.create')}}">Cadastrar nova depesa</a>

<main class="text text-white">
    <table class="table text text-white">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Descricao</th>
                <th scope="col">Valor</th>
                <th scope="col">Vencimento</th>
                <th scope="col">Status</th>
                <th scope="col">Observacao</th>
                <th scope="col">Alterar</th>
                <th scope="col">Excluir</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($data as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->descricao}}</td> 
                    <td>{{$item->valor}}</td> 
                    <td>{{$item->vencimento}}</td> 
                    @if ($item->status == 1)
                    <td >{{$item->status}} - Pendente</td>
                    @elseif( ($item->status == 2)) 
                        <td >  {{$item->status}} - Pago</td>
                    @elseif( ($item->status == 3)) 
                        <td >{{$item->status}} - Atrasado</td>
                    @endif
                    <td >{{$item->observacao}} </td>
                    <td ><a href="{{route('despesas.edit', $item->id)}}">Alterar</a> </td>
                    <td ><a href="{{route('despesas.delete', $item->id)}}">Excluir</a> </td>
                </tr>
            @endforeach        
        </tbody>
    </table>

</main>
@endsection