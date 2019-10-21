@extends('layouts.master')

@section('content')

  <div class="row">

    <div class="col-sm-4">

        <img src="{{$pelicula->poster}}" alt="" style="height:200px">

    </div>
    <div class="col-sm-8">

        <h1>{{$pelicula->title}}</h1>
        <br>
        <h2>{{$pelicula->year}}</h2>
        <br>
        <h2>{{$pelicula->director}}</h2>
        <br><br>
        Resumen:<p>{{$pelicula->synopsis}}</p>
        <br>
        <br>
        Estado:
        @if ($pelicula->rented)
          Pelicula actualmente alquilada.
          <br><br>
          <a href="#" class="btn btn-danger">Devolver pelicula</a>
        @else
          Pelicula disponible.
          <br><br>
          <a href="#" class="btn btn-primary">Alquilar pelicula</a>
        @endif
        <a href="{{url('catalog/edit/' . $pelicula->id)}}" class="btn btn-warning">Editar pelicula</a>
        <a href="{{url('/catalog')}}" class="btn btn-default">Volver al listado</a>

    </div>
  </div>

@stop
