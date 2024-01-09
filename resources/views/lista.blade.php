<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
    <h1>Lista de Mensagens</h1>
    <hr />
    
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Produto</th>
                <th>Categoria</th>
                <th>Preço unitário</th>
                <th>Descrição</th>
            </tr>
        </thead>
        <tbody>
            @foreach($produtos as $row)
            <tr>
                <th scope="row">{{$row->id}}</th>
                <th>{{$row->nome}}</th>
                <th>{{$row->categoria}}</th>
                <th>{{$row->preco}}</th>
                <th>{{$row->descricao}}</th>
            </tr>
            @endforeach
        </tbody> 
    </table>
</div>
</body> 
</html>