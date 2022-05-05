@extends('layouts')

@section('contenido')

<br>

<div class='container'>
    <h1>Editar documento</h1>
    <div class='row pr-0 mr-0'>
        <div class='col-md-2 mb-3'>
            <ul class='nav nav-pills flex-column' id='myTab' role='tablist'>
                <li class='nav-item'>
                    <a class='nav-link'  data-toggle='tab' href='#home1' >Integrante</a>
                </li>

                <li class='nav-item'>
                    <a class='nav-link'  data-toggle='tab' href='#video'  >Delito</a>
                </li>

                <li class='nav-item'>
                    <a class='nav-link'  data-toggle='tab' href='#home3' >Documento</a>
                </li>
            </ul>
        </div>  
        <div class='col-md-10'>
            <div class='tab-content' >
                <div class='tab-pane fade show active' id='home1' role='tabpanel'>
                     
                        <th>Victima</th>
                        <br>
                        <div class='tab-content float-right  ' >
                            <button  type="button" class="float-right btn btn-primary " data-toggle="modal" data-target="#myModal" >
                            Open modal
                            </button>
                        </div>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Email</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>John</td>
                                <td>Doe</td>
                                <td>john@example.com</td>
                            </tbody>
                        </table>
                    
                </div>                            
    
                <div class='tab-pane fade ' id='video' role='tabpanel'>
                 
                        <th>Video</th>
                        <br>
                        <!-- Button to Open the Modal -->
                        <button type="button" class="float-right btn btn-primary " data-toggle="modal" data-target="#myModal" >
                        Open modal
                        </button>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Email</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>John</td>
                                <td>Doe</td>
                                <td>john@example.com</td>
                            </tr>                                        
                            </tbody>
                        </table>
        
                </div>
            
                <div class='tab-pane fade' id='home3' role='tabpanel' >
                        <br>
                        <div class="panel-body">
                            33333333333333333333
                        </div>
                </div>
            </div>
        </div>
    </div>
</div> 

</div>

<br>

@endsection




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

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>