@extends('layouts.master')

@section('contenido')   
    @if(sizeof($publicaciones) > 0)
     <div class="table-responsive">
    <table class="table table-striped table-hover" align="center">
      <thead>
        <tr>
         
       
          <th>Publicado por</th>
          <th>Título </th>
          <th>Publicación</th>
          <th>Acción</th>
          </tr>
      </thead>
      <tbody>
        @foreach($publicaciones as $publicacion)
        <tr>
          <td><img src="http://187.188.168.51:8080/diariopws/api/1.0/archivos/descargar/"{{$publicacion->foto}}> {{$publicacion->nombre}} </td>
          <td>{{$publicacion->titulo}}</td>
          <td>{{$publicacion->observaciones}}</td>
          
          <td> <input type="button" value="Retroalimentar" id="rep"
                class="btn btn-primary publicar"  /></td>
          
        </tr>
        @endforeach
      </tbody>
    </table>

    @else

    <div class="alert alert-danger">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <strong>Ups</strong> No hay Publicaciones en este momento
    </div>
    </div>

    @endif
@endsection
