<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align:center">Lista de paises</h1>
    <div style="width: 80%; margin-left:10%">
    <table class="table table-dark table-hover" >
       <thead>
         <tr>
           <th scope="col" class="btn-primary"> Pais</th>
           <th scope="col" class="btn-success">Capital</th>
           <th scope="col" class="btn-danger">Moneda</th>
           <th scope="col" class="btn-info">Población</th>
           <th scope="col" class="btn-secondary">Ciudades principales</th>
         </tr>
       </thead>
       <tbody>
          @foreach($paises as $pais => $infopais) 
              <tr>
                <td rowspan="3">{{ $pais }}</td>
                <td rowspan="3">{{ $infopais["capital"]}}</td>
                <td rowspan="3">{{ $infopais["moneda"]}}</td>
                <td rowspan="3">{{ $infopais["poblacion"]}}</td>
                <td class="text-success">{{$infopais["ciudades"][0]    }}</td>
              </tr>
              <tr>
                <td class="text-danger">{{$infopais["ciudades"][1]     }}</td>
              </tr>
              <tr>
                <td class="text-primary">{{$infopais["ciudades"][2]     }}</td>
              </tr>
          @endforeach
       </tbody>
    </div>
</body>
</html>