@extends('privado.componentes.plantilla')

@section('titulo', 'Profesores')

@section('main')

<h3 class="col-10 mx-auto">Profesores registrados:</h3>
@include ('privado.profesor.formulario_crear')
    <div class="col-10 mx-auto">
    @include ('privado.profesor.data')
    
    </div>

  </div>

@endsection