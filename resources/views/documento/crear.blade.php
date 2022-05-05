@extends('layouts')

@section('contenido')
<br>

<div class="container">
  <div class="form-group">
    <h2>Documentos</h2>
    @include('documento.modalcrear')
    <!-- Button trigger modal Documento -->
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
                         <a href="{{route('documento.editar')}}" type="button" class="btn btn-primary" >
                            Agregar
                    </a>
                    </td>
                </tr>
               
            </tbody>
        </table>
</div>
@endsection