<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Filmes Favoritos</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    </head>
    <body style="background-color: aliceblue;">
        <div>
            @include('menu')
        </div>
        
        <div class="container" style="margin-top: 3em;">
        <table class="table table-striped">
            <thead class="thead-dark" style="color: white; background-color: black;">
                <tr style="font-size: 20px;">
                    <th scope="col">#</th>
                    <th scope="col">Título</th>
                    <th scope="col">Gênero</th>
                    <th scope="col">Direcao</th>
                    <th scope="col">Imagem</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($filmes as $filme)
                    <tr>
                        <th scope="row">{{ $filme['codigo'] }}</th>
                        <td>{{ $filme['titulo'] }}</td>
                        <td>{{ $filme['genero'] }}</td>
                        <td>{{ $filme['direcao'] }}</td>
                        <td><img src="{{ $filme['imagem'] }}" alt="Imagem" style="height: 80px; width: 80px;" /></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </body>
</html>