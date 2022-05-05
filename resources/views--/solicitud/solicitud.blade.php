@extends('layouts')

@section('contenido')

<br>

<div class="container">

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  Open
</button>
<br>
     
    <div class="card">

     
    <!-- Button to Open the Modal -->
   <table id="example"   class="table table-striped" style="width:100%">
            <thead>
            <tr>
                <th>id</th>
                <th>Numero de investigación</th>
                <th>Tipo</th>
                <th>Carpeta</th>
                <th>Carpeta</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>John</td>
                <td>Doe</td>
                <td>john@example.com</td>
                <td>Carpeta</td>
                <td><!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Crear
</button>
</td>
            </tr>
            <tr>
                <td>Mary</td>
                <td>Moe</td>
                <td>mary@example.com</td>
                <td>Carpeta</td>
                <td><!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Crear
</button>
</td>
            </tr>
            <tr>
                <td>July</td>
                <td>Dooley</td>
                <td>july@example.com</td>
                <td>Carpeta</td>
                <td><!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Crear
</button>
</td>
            </tr>
            </tbody>
        </table>

    </div>
</div>    











<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <form action="/action_page.php"  class="redireccionar">
            <div class="mb-3 mt-3">
              <label for="email" class="form-label">Numero de investigación:</label>
              <input type="text" class="form-control" id="email" placeholder="Numero de investigacion " name="numinv">
            </div>
            <div class="mb-3">
              <label for="pwd" class="form-label">Tipo:</label>
              <select class="form-select mt-3">
                  <option>Con detenido</option>
                  <option>Sin detenido</option>
                  <option>Cuadernillo</option>
                  <option>Orden de aprehension</option>
              </select>
            </div>
         
            <a href=""type="submit" class="btn btn-primary">Submit</a>
        </form> 
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>





<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
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
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a type="button"  href="{{route('carpeta.carpeta')}}"  class="btn btn-primary">Save changes</a>
      </div>
    </div>
  </div>
</div>
@endsection