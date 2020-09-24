<!-- heredar master-page en esta vista -->
@extends('layouts.master')

<!-- contenido vistas -->

@section('contenido_vistas')

<h2 class="text-center" style="margin-top:50px;">Información del empleado</h2>

</br>



    <div class="row">
  
    <div class="card" style="width: 23rem;">
       <div class="card-header bg-primary text-white text-center">
       <b>Información de: {{$empleado->FirstName}} {{$empleado->LastName}}</b>
      </div>
      <div class="card-body">
        
        <li class="list-group-item"> 
        Cargo: {{$empleado->Title}}
          </li>
          @if($empleado->jefe_directo)
          <li class="list-group-item"> Jefe Directo: 
              {{$empleado->jefe_directo->FirstName}} 
              {{$empleado->jefe_directo->LastName}} 
          </li>
          @endif
          <li class="list-group-item">
              Dirección: {{$empleado->Address}} , {{$empleado->City}} , {{$empleado->Country}}
          </li>
          <li class="list-group-item">
              Fecha de Nacimiento: {{$empleado->BirthDate->toFormattedDateString()}} 
          </li>
          <li class="list-group-item">
              Fecha de Contratación: {{$empleado->HireDate->toFormattedDateString()}} 
          </li>
  

      </div>
    </div>


    <div class="card" style="width: 23rem;">
    
    <div class="card-header bg-success text-white text-center">
        <b>Subalternos</b>
    </div>
      
      <div class="card-body">
      @if($empleado->subalternos->count() !==0)

        @foreach($empleado->subalternos as $subalterno)
          <li class="list-group-item">
              {{$subalterno->FirstName}}, {{$subalterno->LastName}}
          </li>

        @endforeach
    
      @else
      <h5 class="list-group-item text-danger">El empleado no tiene subalternos</h5>
     @endif
      </div>
    </div>


    <div class="card" style="width: 23rem;">
    
    <div class="card-header bg-danger text-white text-center">
        <b>Clientes</b>
    </div>
      
      <div class="card-body">
      @if($empleado->clientes->count() !==0)


         @foreach($empleado->clientes as $cliente)
          <li class="list-group-item">Nombre:
              {{$cliente->FirstName}} 
              {{$cliente->LastName}} 
          </li>
          <li class="list-group-item">Empresa:
              {{$cliente->Company}} 
          </li>
          <li class="list-group-item">Correo:
              {{$cliente->Email}} 
          </li>
          <br>
          @endforeach
    
      @else
      <h5 class="list-group-item text-danger">El empleado no tiene clientes</h5>
     @endif
      </div>
    </div>
    
</div>
</div>

@endsection