@extends('back-end.layouts.main')
@section('content')
<h1 class="text-center text-primary m-3">DETAIL Du PATIENT {{$finds->id}}</h1>
<div class="container d-flex m-4 p-4">
    <div class="col-md-4">
        <img src="{{ asset('storage') . '/' . $finds->photo }}" class="card-img-top" alt="...">
    </div>
    <div class="col-md-8">
        <label for="">NOM : </label> <span>  {{$finds->nom}} </span> <br>
        <label for="">PRENOM : </label><span> {{$finds->prenom}}</span> <br>
        <label for="">AGE : </label><span>   {{$finds->age}} </span>  <br>
        <label for="">PROFESSION : </label> <span> {{$finds->profession}} </span>  <br>
        <label for="">MOIS_GROSSESSE : </label> <span> {{$finds->mois_grossesse}} </span>  <br>
        <label for="">NOMBRE_CPN : </label> <span> {{$finds->nombre_cpn}} </span>  <br>
        <label for="">ADRESSE : </label><span>  {{$finds->adresse}} </span>  <br>
        <label for="">TELEPHONE : </label><span>  {{$finds->telephone}} </span>  <br>
        <label for="">EMAIL : </label><span>  {{$finds->email}} </span>  <br>
    </div>
</div>
<div class="d-flex justify-content-center m-3 p-3">
    <a href="{{route('gestion_patient.create') }}" class="btn btn-primary"> Retour</a>
</div>

@endsection
