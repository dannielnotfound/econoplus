
<h1>Cadastrar nova Despesa</h1>

<form action="{{route('despesas.store')}}" method="post">
    @csrf
    <input type="text" name='descricao' placeholder="Descricao">
    <br>
    <input type="number"name='valor'  placeholder="Valor">
    <br>
    <label for="vencimento">Data de Vencimento</label>
    <input type="date" name="vencimento">
    <br>
    <label for="status">Status</label>
    <select name="status">
        <option value="1">Pendente</option>
        <option value="2">Pago</option>
        <option value="3">Em atraso</option>
    </select>
    <br>
    <label for="observacao">Anotações</label><br>
    <textarea name="observacao" id="observacao" cols="30" rows="10"></textarea>
    <br>
    <br>
    <input type="submit" value="Cadastrar">
</form>