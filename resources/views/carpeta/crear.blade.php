@extends('layouts')

@section('contenido')

<br>

<div class="container">
    <div class="form-group">
        <h1>Carpeta</h1>
        @include('carpeta.modalcrear')

        <!-- Button trigger modal Carpeta -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#crearcarpeta">
        Carpeta
        </button>
    </div>

              <!-- TABLA---Carpeta -->
        <table id="example"   class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>Carpeta</th>
                    <th>Tipo de juzgado</th>
                    <th>Distrito</th>
                    <th>Delito</th>
                    <th>Integrante</th>
                    <th>Audiencias</th>
                    <th>Documentos</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>John</td>
                    <td>Doe</td>
                    <td>john@example.com</td>
                    <td><!-- Button trigger delito.modalver -->
                            @include('delito.modalver')
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#delitover">
                            ver
                            </button></td>
                    <td><!-- Button trigger modal Integrante -->
                    <a href="{{route('integrante.crear')}}" type="button" class="btn btn-primary" >
                            Agregar
                            </a> 
                    </td>
                        <!-- Button trigger modal Audiencia -->
                    <td>    <a href="{{route('audiencia.crear')}}" type="button" class="btn btn-primary" >
                            Agregar
                            </a> </td>
                
                    <td><!-- Button trigger modal Documento -->
                    <a href="{{route('documento.crear')}}" type="button" class="btn btn-primary" >
                            Agregar
                    </a>
                    </td>
                    <td>     <a href="{{route('carpeta.editar')}}" type="button" class="btn btn-primary" >
                            Editar
                            </a>    
                    </td>
                </tr>

            </tbody>
        </table>


    

</div>
  


@endsection
