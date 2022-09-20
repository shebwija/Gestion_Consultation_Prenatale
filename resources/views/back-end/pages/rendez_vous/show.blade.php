@extends('back-end.layouts.main')

@section('content')
<h1 class="text-center text-primary m-3">Détails du Rendez-vous {{$finds->id}}</h1>
<div class="container d-flex m-4 p-4">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Nom et prénom: {{$finds->nom}} {{$finds->prenom}}</h4>
                <h5>Adresse: {{$finds->adresse}}</h5>
                <h5>Adresse mail: {{$finds->email}}</h5>
                <h5>Téléphone: {{$finds->telephone}}</h5>
                <h5>Age: {{$finds->age}}</h5>
                <h5>Profession: {{$finds->profession}}</h5>
                <h5>Nombre de mois de grossesse: {{$finds->mois_grossesse}}</h5>
                <h5>Nombre de consultation: {{$finds->nombre_cpn}}</h5>
                <h5>Date du rendez-vous: {{$finds->date_du_rendez_vous}}</h5>
                <h5>Date du rendez-vous: {{$finds->heure_du_rendez_vous}}</h5>
                <hr>
                <a href="javascript:;" class="btn btn-primary">Médécin: {{$finds->medecin->nom}} {{$finds->medecin->prenom}}</a>
            </div>
        </div>
    </div>
</div>

@endsection

