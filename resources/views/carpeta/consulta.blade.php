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
    <br>
    <!-- Button to Open the Modal -->
   <table id="example"   class="table table-striped" style="width:100%">
            <thead>
            <tr>
                <th>id</th>
                <th>Origen</th>
                <th>Carpeta</th>
                <th>Tipo de juzgado</th>
                <th>Distrito</th>
                <th>Agregar</th>
                
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>John</td>
                <td>Doe</td>
                <td>john@example.com</td>
                <td>Carpeta</td>
                <td>Azueta</td>
                <td><!-- Button trigger modal Audiencia -->
                    <a href="{{route('carpeta.consulta2')}}" type="button" class="btn btn-primary" >
                    Audiencia
                    </a>
                </td>
            </tr>
            <tr>
                <td>Mary</td>
                <td>Moe</td>
                <td>mary@example.com</td>
                <td>Carpeta</td>
                <td>Azueta</td>
                <td><!-- Button trigger modal Audiencia -->
                    <a href="{{route('carpeta.consulta2')}}"  type="button" class="btn btn-primary">
                    Audiencia
                    </a>
                </td>
                
            </tr>
            <tr>
                <td>July</td>
                <td>Dooley</td>
                <td>july@example.com</td>
                <td>Carpeta</td>
                <td>Azueta</td>
                <td><!-- Button trigger modal Audiencia -->
                    <a href="{{route('carpeta.consulta2')}}"type="button" class="btn btn-primary">
                    Audiencia
                    </a>
                </td>
            </tr>
            </tbody>
            
    </table>




</div>
    @endsection
