extends('layout.main')
@section('contenu')
<h1 class="text-center text-primary m-3">DETAIL DE LA CONSULTATION {{$finds->id}}</h1>
<div class="container d-flex m-4 p-4">
    <div class="col-md-8">
        <label for="">TENSION : </label> <span>  {{$finds->tension}} </span> <br>
        <label for="">RESPIRATION : </label><span> {{$finds->respiration}}</span> <br>
        <label for="">VOLUME_ABDOMINAL : </label><span>  {{$finds->volume_abdominal}} </span>  <br>
        <label for="">EXAMEN_SANG : </label> <span> {{$finds->examen_sang}} </span>  <br>
        <label for="">IMAGERIE : </label><span>  {{$finds->imagerie}} </span>  <br>
    </div>
</div>
<div class="d-flex justify-content-center m-3 p-3">
    <a href="{{route('gestion_consultation.create') }}" class="btn btn-primary"> Retour</a>
</div>

@endsection
