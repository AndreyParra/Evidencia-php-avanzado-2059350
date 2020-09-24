@extends('layouts.master')

@section('estilos-particulares')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
@endsection

@section('j-deps')
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $(document).ready ( function() {
    $( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' }).val();
  } );
  </script>

<script>
  $(document).ready ( function() {
    $( "#datepicker2" ).datepicker({ dateFormat: 'yy-mm-dd' }).val();
  } );
  </script>
@endsection

 
<!--inicio de la vista -->
@section('contenido_vistas')
<form class="form-horizontal" method="post" action="{{  url('empleados/'.$empleado->EmployeeId)    }}">
@method("PUT")
@csrf

@if(session("mensaje"))
  <div class="alert-success">{{ session("mensaje")}}</div>
@endif
<fieldset>

<!-- Form Name -->
<legend>Actualizar Empleado: <strong> {{ $empleado->FirstName    }} {{ $empleado->LastName    }} </strong></legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Nombre: </label>  
  <div class="col-md-4">
  <input id="textinput"  value="{{  $empleado -> FirstName }}" name="nombre" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Apellido: </label>  
  <div class="col-md-4">
  <input id="textinput" value="{{  $empleado -> LastName }}" name="apellido" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Cargo</label>
  <div class="col-md-4">
    <select id="selectbasic" name="cargo" class="form-control">
    @foreach($cargos as $c)

        @if( $empleado->Title === $c->Title)
            <option selected>{{  $c->Title    }} </option>        
        @else 
            <option>{{  $c->Title    }}</option>
        @endif
    @endforeach
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Jefe Directo</label>
  <div class="col-md-4">
    <select id="selectbasic" name="jefe" class="form-control">
        <!-- recorrer los jefes -->

        @if( $empleado->jefe_directo()->count() === 0)
            <option value="" selected>Seleccione jefe directo</option>

            @foreach($jefes as $j)
            
            <option value="{{  $j->EmployeeId   }}">{{  $j->FirstName  }} {{   $j->LastName   }}  </option>
        
            @endforeach
            
        @else
            <option value="" >Seleccione jefe directo</option>
       

          @foreach($jefes as $j)
            
            @if( $j->EmployeeId === $empleado->jefe_directo()->first()->EmployeeId)
            <option value="{{  $j->EmployeeId   }}" selected>{{  $j->FirstName  }} {{   $j->LastName   }}  </option>
            
            @else
            <option value="{{  $j->EmployeeId   }}">{{  $j->FirstName  }} {{   $j->LastName   }}  </option>
        
            @endif

          @endforeach

        @endif
    </select>
    <p>{{$errors->first('jefe')}}</p>
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Email</label>  
  <div class="col-md-4">
  <input id="textinput" value="{{  $empleado -> Email }}" name="email" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Fecha de Contratación</label>  
  <div class="col-md-4">
  <input id="datepicker" value="{{  $empleado -> HireDate->format('Y-m-d') }}" name="contrato" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Fecha de Nacimiento</label>  
  <div class="col-md-4">
  <input id="datepicker2" value="{{  $empleado -> BirthDate->format('Y-m-d') }}" name="nacimiento" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Dirección</label>  
  <div class="col-md-4">
  <input id="textinput" value="{{  $empleado -> Address }}" name="direccion" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Ciudad</label>  
  <div class="col-md-4">
  <input id="textinput" value="{{  $empleado -> City }}" name="ciudad" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="enviar" class="btn btn-success">Enviar</button>
  </div>
</div>

</fieldset>
</form>
<!-- fin de la vista -->
@endsection