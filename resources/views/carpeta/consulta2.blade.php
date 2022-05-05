@extends('layouts')

@section('contenido')

<br>

<div class="container">
   <br>
     
        <h2>Carpeta</h2>
            <!-- carpeta -->
        <!-- Button trigger modal Audiencia -->
       
  
          <br>

              <!-- TABLA---Carpeta -->
        <table id="example"   class="table table-striped" style="width:100%">
            <thead>
            <tr>
                <th>Carpeta</th>
                <th>Tipo de juzgado</th>
                <th>Distrito</th>
                <th>Delito</th>
                <th>Integrante</th>
                <th>Editar</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>John</td>
                <td>Doe</td>
                <td>john@example.com</td>
                <td>Doe</td>
                <td><!-- Button trigger modal Integrante -->
                          @include('integrante.modalver')
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#integrantever">
                          ver
                          </button>
                </td>
                <td>     <a href="{{route('carpeta.editar')}}" type="button" class="btn btn-primary" >
                          Editar
                          </a>    </td>
            </tr>

            </tbody>
        </table>
          <br>

      <!-- TABLA---inputado -->
      <h2>Inputado</h2>
        <table id="example"   class="table table-striped" style="width:100%">
            <thead>
            <tr>
                <th>Carpeta</th>
                <th>Tipo de juzgado</th>
                <th>Distrito</th>
                <th>Delito</th>
            
                <th>Editar</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>John</td>
                <td>Doe</td>
                <td>john@example.com</td>
                <td> @include('delito.modalver')
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#delitover">
                        Ver
                        </button></td>
               
                <td>     <a href="{{route('delito.delitoinputado')}}" type="button" class="btn btn-primary" >
                          Editar
                          </a>    </td>
            </tr>

            </tbody>
        </table>

          <h2>Documentos</h2>
          <div class="form-group">
              @include('documento.modalcrear')
                <!--Modal Documento -->
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#documentocrear">
              Documento
              </button>
          </div>
        <!-- TABLA documento -->
        <table id="example"   class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Origen</th>
                    <th>TITULO</th>
                    <th>VER</th> 
                    <th>RESPUESTA</th> 
                    <th>AUDIENCIA</th> 
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>John</td>
                    <td>Doe</td>
                    <td>john@example.com</td>
                    <td><!-- Button trigger modal Audiencia -->
                    @include('documento.modalver')
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#documentover">
                      Ver
                    </button>
                    </td>
                    <td><!-- Button trigger modal Audiencia -->
                    @include('documento.modalrespuesta')
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#documentoRespuesta">
                      Ver
                      </button>
                    </td>
                         <td><!-- Button trigger modal Audiencia -->
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Video">
                      Ver
                      </button>
                    </td>
                </tr>
               
            </tbody>
        </table>
        <br>
        
        
        <div class="form-group">
         <h2>Audiencias</h2> 
         @include('audiencia.modalcrear')
         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#audienciacrear">
         Audiencia
         </button>
       </div>
                   <!-- EXPEDIENTE AUDIENCIA -->
         <table id="example"   class="table table-striped" style="width:100%">
             <thead>
                 <tr>
                     <th>id</th>
                     <th>Origen</th>
                     <th>Sala</th>
                     <th>Fecha</th>
                     <th>Tipo</th>
                     <th>Etapa</th> 
                     <th>Participante</th>
                     <th>Delitos</th>
                     <th>Documento</th>
                     <th>Video</th> 
                     <th>Editar</th> 
                 </tr>
             </thead>
             <tbody>

                 <tr>
                     <td>Mary</td>
                     <td>Moe</td>
                     <td>mary@example.com</td>
                     <td>Carpeta</td>
                     <td>Carpeta</td>
                     <td><!-- Button trigger modal Etapa-->
                  @include('audiencia.modaletapaver')
                     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#etapaver">
                     Ver
                     </button></td>
                     <td><!-- Button trigger modal Integrante -->
                         @include('integrante.modalver')
                         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#integrantever">
                         Documentos
                         </button>
                     </td>
                     <td>
                       <!-- Button trigger modal Delito -->
                       @include('delito.modalver')
                       <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#delitover">
                       Ver
                       </button>
                   
                     </td>
                     <td><!-- Button trigger modal Documentos -->
                     @include('documento.modalver')
                     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#documentover">
                     Ver
                     </button>
                     </td>
                     <td><!-- Button trigger modal Audiencia -->
                     @include('audiencia.modalmostrar')
                     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#audienciamostrar">
                     Ver
                                                 </button>
                     </td>
                     <td><!-- Button trigger modal Audiencia -->
                         <a href="{{route('audiencia.editar')}}" type="button" class="btn btn-primary" >
                         Ver
                         </a>
                     </td>
                 </tr>
                
             </tbody>
         </table>


    </div>
</div>    



@endsection
