@extends('layouts')

@section('contenido')

<br>

<div class="container">

</div>
<div class="container">

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
@endsection

