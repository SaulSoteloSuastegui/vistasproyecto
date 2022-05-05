@extends('layouts')

@section('contenido')
<div class="container">
<br>

<div class="card">
  <div class="card-header">Carpeta</div>


  <form action="/action_page.php" style="padding:20px;">
  <div class="form-group">
    <label for="email">Antecedente:</label>
    <input type="text" class="form-control" placeholder="Carpeta" id="email">
  </div>
  <div class="form-group">
    <label for="email">Tipo de juzgado:</label>
    <input type="text" class="form-control" placeholder="Carpeta" id="email">
  </div>

  <div class="form-group">
    <label for="email">Carpeta:</label>
    <input type="text" class="form-control" placeholder="Carpeta" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Distrito:</label>
    <input type="text" class="form-control" placeholder="Numero inv" id="pwd">
  </div>

 
  <a  href="{{route('carpeta.carpeta')}}" type="submit" class="btn btn-primary">Submit</a>
</form>
</div>
</div>

@endsection