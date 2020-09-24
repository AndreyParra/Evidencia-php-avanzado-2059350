@extends('layouts.master')

@section('estilos-particulares')
 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
@endsection

@section('j-deps')
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( ".datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' }).val();
  } );
  </script>
@endsection

@section('contenido_vistas')
 
<form class="form-horizontal" method="post" action="{{ url('empleados') }}">
@csrf
@if(session("mensaje"))
  <p class="alert-success">{{ session("mensaje") }}</p>
@endif
<fieldset>

<!-- Form Name -->
<legend style="margin-top:2%;">Nuevo Empleado</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Apellido">Nombre</label>  
  <div class="col-md-5">
  <input id="Apellido" name="nombre" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Apellido</label>  
  <div class="col-md-5">
  <input id="textinput" name="apellido" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Jefe directo</label>
  <div class="col-md-5">
    <select id="selectbasic" name="jefe" class="form-control">
    <!-- recorrer los jefes -->
    @foreach($jefes as $j)
    <option value="{{ $j->EmployeeId }}">{{ $j->LastName }}, {{ $j->FirstName }}</option>
    @endforeach
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Cargo</label>
  <div class="col-md-5">
    <select id="selectbasic" name="cargo" class="form-control">
    @foreach($cargos as $c)
    <option value="{{ $c->Title }}">{{ $c->Title }}</option>
    @endforeach
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Fecha de contratación</label>  
  <div class="col-md-5">
  <input  name="contrato" type="text" placeholder="" class="form-control input-md datepicker">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Fecha de nacimiento</label>  
  <div class="col-md-5">
  <input  name="nacimiento" type="text" placeholder="" class="form-control input-md datepicker">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Email</label>  
  <div class="col-md-5">
  <input  name="email" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Dirección</label>  
  <div class="col-md-5">
  <input id="textinput" name="direccion" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Ciudad</label>  
  <div class="col-md-5">
  <input id="textinput" name="ciudad" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>







<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for=""></label>
  <div class="col-md-4">
    <button id="" name="" class="btn btn-primary">Enviar</button>
  </div>
</div>

</fieldset>
</form>


@endsection