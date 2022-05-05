@extends('layouts')

@section('contenido')
<div class="container">
<br>

<div class="card">
  <div class="card-header">Audiencia</div>


  <form action="/action_page.php" style="padding:20px;">

  <div class="form-group">
    <label for="email">Carpeta:</label>
    <input type="text" class="form-control" placeholder="Carpeta" id="email">
  </div>
  <div class="form-group">
    <label for="email">Sala:</label>
    <input type="text" class="form-control" placeholder="Carpeta" id="email">
  </div>
  <div class="form-group">
    <label for="email">Fecha:</label>
    <input type="text" class="form-control" placeholder="Carpeta" id="email">
  </div>

  <div class="form-group">
    <label for="email">Tipo:</label>
    <input type="text" class="form-control" placeholder="Carpeta" id="email">
  </div>
  <a  href="" type="submit" class="btn btn-primary">Submit</a>
</form>
</div>
</div>


@endsection