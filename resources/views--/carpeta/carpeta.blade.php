@extends('layouts')

@section('contenido')

<br>



<div class='container'>

    <table class='table-sm table-responsive table-bordered p-0 m-0' id='tabla-num-2337'>
            <thead>
                <tr> 
                    <th class='titulo_id'> ANTECEDENTE</th>
                    <th class='titulo_tabla' style='width:94%'>TURNO</th>
                </tr>
            </thead>
            <thead>
                <tr> 
                    <th class='titulo_id'> ID:2337</th>
            
                    <th >    
                                            <button  type="button" class="float-right btn btn-primary " data-toggle="modal" data-target="#myModal" >
                                                          Audiencia
                                            </button>
                    </th>
                
                                    
                </tr>
            </thead>

            <tbody id='tbody-audiencias'>
                    <tr>
                        <td colspan='2'>
                                <div class='row pr-0 mr-0'>
                                    <div class='col-md-2 mb-3'>
                                    <ul class='nav nav-pills flex-column' id='myTab' role='tablist'>

                                    <li class='nav-item'>
                                                <a class='nav-link'  data-toggle='tab' href='#home-33' >Victima</a>
                                            </li>
                                            <li class='nav-item'>
                                                <a class='nav-link active'  data-toggle='tab' href='#home-11'  >Delito</a>
                                            </li>
                                            <li class='nav-item'>
                                                <a class='nav-link'  data-toggle='tab' href='#video-22'  >Inputado</a>
                                            </li>
                                   
                                            <li class='nav-item'>
                                                <a class='nav-link'  data-toggle='tab' href='#home-33' >Documento</a>
                                            </li>
                                     


                                 
                                    </ul>
                               
                                
                                    </div>
                                    <div class='col-md-10'>
                                         <div class='tab-content' >

                                            <div class='tab-pane fade show active' id='home-11' role='tabpanel'>
                                                    <div class="panel-body">
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
                                                                </tr>
                                                                <tr>
                                                                    <td>Mary</td>
                                                                    <td>Moe</td>
                                                                    <td>mary@example.com</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>July</td>
                                                                    <td>Dooley</td>
                                                                    <td>july@example.com</td>
                                                                </tr>
                                                                </tbody>
                                                            </table>

                                                    </div>
                                                
                                            </div>

                                            <div class='tab-pane fade ' id='video-22' role='tabpanel'>
                                                    <div class="panel-body">
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
                                                                <tr>
                                                                    <td>Mary</td>
                                                                    <td>Moe</td>
                                                                    <td>mary@example.com</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>July</td>
                                                                    <td>Dooley</td>
                                                                    <td>july@example.com</td>
                                                                </tr>
                                                                </tbody>
                                                            </table>

                                                    </div>
                                                
                                            </div>
                                            <div class='tab-pane fade' id='home-33' role='tabpanel' >
                                            <br>
                                                    <div class="panel-body">33333333333333333333</div>
                                                
                                            </div>
                                        </div>
                                   </div>
                                </div>
                        </td>
                    </tr>
            </tbody>    
            
            <thead>
                <tr> 
                    <th class='titulo_id'> ID:2337</th>
                    <th class='titulo_tabla' style='width:94%'> AUDIENCIAS</th>
                </tr>
            </thead>
                <tbody id='tbody-audiencias'>
                    <tr>
                        <td colspan='2'>
                                <div class='row pr-0 mr-0'>
                                    <div class='col-md-2 mb-3'>
                                    <ul class='nav nav-pills flex-column' id='myTab' role='tablist'>
                                            <li class='nav-item'>
                                                <a class='nav-link'  data-toggle='tab' href='#home-33' >Video</a>
                                            </li>
                                            <li class='nav-item'>
                                                <a class='nav-link'  data-toggle='tab' href='#home-33' >participantes</a>
                                            </li>
                                            <li class='nav-item'>
                                                <a class='nav-link'  data-toggle='tab' href='#home-33' >Documento</a>
                                            </li>
                                    
                                    </ul>
                               
                                
                                    </div>
                                    <div class='col-md-10'>
                                         <div class='tab-content' >

                                            <div class='tab-pane fade show active' id='home-11' role='tabpanel'>
                                                    <div class="panel-body">
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
                                                                </tr>
                                                                <tr>
                                                                    <td>Mary</td>
                                                                    <td>Moe</td>
                                                                    <td>mary@example.com</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>July</td>
                                                                    <td>Dooley</td>
                                                                    <td>july@example.com</td>
                                                                </tr>
                                                                </tbody>
                                                            </table>

                                                    </div>
                                                
                                            </div>

                                            <div class='tab-pane fade ' id='video-22' role='tabpanel'>
                                                    <div class="panel-body">
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
                                                                <tr>
                                                                    <td>Mary</td>
                                                                    <td>Moe</td>
                                                                    <td>mary@example.com</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>July</td>
                                                                    <td>Dooley</td>
                                                                    <td>july@example.com</td>
                                                                </tr>
                                                                </tbody>
                                                            </table>

                                                    </div>
                                                
                                            </div>
                                            <div class='tab-pane fade' id='home-33' role='tabpanel' >
                                            <br>
                                                    <div class="panel-body">33333333333333333333</div>
                                                
                                            </div>
                                        </div>
                                   </div>
                                </div>
                        </td>
                    </tr>
            </tbody>    

                   <thead>
                <tr> 
                    <th class='titulo_id'> ID:2337</th>
                    <th class='titulo_tabla' style='width:94%'> AUDIENCIAS</th>
                </tr>
            </thead>
                <tbody id='tbody-audiencias'>
                    <tr>
                        <td colspan='2'>
                                <div class='row pr-0 mr-0'>
                                    <div class='col-md-2 mb-3'>
                                    <ul class='nav nav-pills flex-column' id='myTab' role='tablist'>
                                            <li class='nav-item'>
                                                <a class='nav-link'  data-toggle='tab' href='#home-33' >Video</a>
                                            </li>
                                            <li class='nav-item'>
                                                <a class='nav-link'  data-toggle='tab' href='#home-33' >participantes</a>
                                            </li>
                                            <li class='nav-item'>
                                                <a class='nav-link'  data-toggle='tab' href='#home-33' >Documento</a>
                                            </li>
                                    
                                    </ul>
                               
                                
                                    </div>
                                    <div class='col-md-10'>
                                         <div class='tab-content' >

                                            <div class='tab-pane fade show active' id='home-11' role='tabpanel'>
                                                    <div class="panel-body">
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
                                                                </tr>
                                                                <tr>
                                                                    <td>Mary</td>
                                                                    <td>Moe</td>
                                                                    <td>mary@example.com</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>July</td>
                                                                    <td>Dooley</td>
                                                                    <td>july@example.com</td>
                                                                </tr>
                                                                </tbody>
                                                            </table>

                                                    </div>
                                                
                                            </div>

                                            <div class='tab-pane fade ' id='video-22' role='tabpanel'>
                                                    <div class="panel-body">
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
                                                                <tr>
                                                                    <td>Mary</td>
                                                                    <td>Moe</td>
                                                                    <td>mary@example.com</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>July</td>
                                                                    <td>Dooley</td>
                                                                    <td>july@example.com</td>
                                                                </tr>
                                                                </tbody>
                                                            </table>

                                                    </div>
                                                
                                            </div>
                                            <div class='tab-pane fade' id='home-33' role='tabpanel' >
                                            <br>
                                                    <div class="panel-body">33333333333333333333</div>
                                                
                                            </div>
                                        </div>
                                   </div>
                                </div>
                        </td>
                    </tr>
            </tbody>    
    </table>
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
            <label for="email">Tipo de juzgado:</label>
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
            <a  href="{{route('carpeta.carpeta')}}" type="submit" class="btn btn-primary">Submit</a>
            </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>





