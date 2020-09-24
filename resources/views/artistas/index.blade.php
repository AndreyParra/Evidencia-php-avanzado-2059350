<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body style="width: 70%; margin-left:20%;">
    <h1 text-center> Lista de Artistas </h1>
    <table class="table table-dark margin-top: 10%;">
        <thead>
            <tr>
                <th scope="col" class=" btn-success">Artista(Grupo)</th>
                <th scope="col" class=" btn-danger">Albumes </th>
            </tr>
        </thead>
        <tbody>
            @foreach($artistas as $artista)
            <!-- Aqui muestro cada artista -->
                <tr>
                    <td class=" btn-dark">{{  $artista->Name     }}</td>
                    <td>
                        <ul>
                            @foreach($artista->albumes()->get()  as $album  )
                            <li> {{  $album->Title    }}    </li>
                            @endforeach
                        </ul>
                    </td>
                </tr>    

            @endforeach
        </tbody>
    </table>

</body>
</html>