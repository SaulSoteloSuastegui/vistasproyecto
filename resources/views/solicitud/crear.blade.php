@extends('layouts')

@section('contenido')

<br>

<div class="container">
    <div class="container">
        <h1>Solicitud</h1>
        <!-- Button trigger modal -->
        @include('solicitud.modalcrear')
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Solicitud">
        Solicitud
        </button>
    </div>
    <br>
    <br>
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
                <td><!-- Button trigger modal Carpeta -->
                @include('carpeta.modalcrear')
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#crearcarpeta">
                Carpeta
                </button>
                </td>
            </tr>
            <tr>
                <td>Mary</td>
                <td>Moe</td>
                <td>mary@example.com</td>
                <td>Carpeta</td>
                <td><!-- Button trigger modal Carpeta -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#crearcarpeta">
                Carpeta
                </button>
                </td>
            </tr>
            <tr>
                <td>July</td>
                <td>Dooley</td>
                <td>july@example.com</td>
                <td>Carpeta</td>
                <td><!-- Button trigger modal Carpeta -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#crearcarpeta">
                Carpeta
                </button>
                </td>
            </tr>
        </tbody>
    </table>

</div>
@endsection