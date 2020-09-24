<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="width: 90%; margin-left:30%; margin-top: 10%;">
<form class="form-horizontal" method="POST" action="{{ url('artistas/store') }}">
@csrf
<fieldset>

<!-- Form Name -->
<legend>Nuevo Artista</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Nombre Artista o banda</label>  
  <div class="col-md-4">
  <input id="textinput" name="nombre_artista" type="text" placeholder="Digíte el nombre" class="form-control input-md">
    
    <strong class="alert-danger">{{ $errors->first("nombre_artista") }}</strong>
     @error ('nombre_artista')
        <div class="danger alert-danger">{{ $message }}</div>
     @enderror

  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="enviar"></label>
  <div class="col-md-4">
    <button type="submit" id="enviar" name="enviar" class="btn btn-success">Enviar</button>
  </div>
</div>

</fieldset>
<!--letrero de exito-->
@if(session("exito"))
   <p class="alert-success">{{ session("exito") }}</p>
@endif
</form>

</body>
</html>