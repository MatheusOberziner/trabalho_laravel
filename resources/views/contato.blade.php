<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Contato</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    </head>
    <body style="background-color: aliceblue;">
        <div>
            @include('menu')
        </div>

        <div style="display: flex; justify-content: center; align-text: center;">
            <a href="/contato/cadastro" class="btn btn-success" style="margin-top: 2em;">Quero cadastrar o meu contato.</a>
        </div>

        @foreach($contatos as $contato)
            <p>{{ contato }}</p>
        @endforeach
    </body>
</html>