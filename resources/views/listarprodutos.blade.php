    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Listar Produtos</title>
    </head>
    <body>
        <h1>Meus produtos</h1>
        <table>
            <thead>
                <td>id</td>
                <td>Nome</td>
                <td>Preço</td>
                <td>Qtde</td>
                <td>Categoria</td>
            </thead>
            <tbody>
                @foreach($prods as $p)
                <tr>
                <td>{{ $p['id'] }}</td>
                <td>{{ $p['nome'] }}</td>
                <td>{{ $p['preco'] }}</td>
                <td>{{ $p['quantidade'] }}</td>
                <td>{{ $p['categoria'] ['nome'] }}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
        {{ dd($prods) }}
    </body>
    </html>