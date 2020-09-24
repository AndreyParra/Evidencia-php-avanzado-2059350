<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style="width: 100%; ">

            <a href="{{ url('empleados/create') }}" class="btn btn-success" style="margin-top: 2%; margin-left: 2%;">
                 Nuevo empleado
            </a>
            <br><br>

    <table class="table table-dark " >
       
       <thead>
          <tr>
          <h3 class="text-center btn-dark"> Listar Empleados</h3>

            <td scope="col" class=" btn-success">Nombre y Apellido</td>
            <td scope="col" class=" btn-danger">Cargo</td>
            <td scope="col" class="btn-warning"> Email</td>
            <td scope="col" class=" btn-info">Detalles</td>
            <td scope="col" class=" btn-secondary">Actualizar</td>
          </tr>
       </thead>
       
       <tbody>
           
           @foreach ($empleados as $empleado)
                      
              <tr>
              
                 <td>{{ $empleado->FirstName}} <small class="text-danger">{{$empleado->LastName}}</small></td>
                 <td> {{ $empleado->Title}}</td>                     
                 <td>{{ $empleado->Email}}</td>
                 <td>
                    <a href='{{url("empleados/$empleado->EmployeeId")}}' class="btn btn-success">Ver detalles</a>
                 </td>
                 <td>
                    <a href="{{url('empleados/'.$empleado->EmployeeId.'/edit')}}" class="btn btn-primary">Actualizar</a>
                 </td>
              
              </tr>
              
           @endforeach
       </tbody>
    </table>
    <!-- Poner el paginador -->

    {{$empleados->links()}}

    

</body>
</html>