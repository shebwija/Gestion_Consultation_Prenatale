@extends('back-end.layouts.main')

@section('content')
<h1 class="text-center text-primary m-3">DETAIL Du medecin {{$finds->id}}</h1>
<div class="container d-flex m-4 p-4">
    <div class="row">
        <div class="card mb-3">
            <div class="row g-0">
              <div class="col-md-4">
                <img <img src="{{asset('storage/'.$finds->photo)}}" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h4 class="card-title">{{$finds->nom}} {{$finds->prenom}}</h4>
                    <h5>{{$finds->specialite}}</h5>
                    <h5>{{$finds->genre}}</h5>
                    <h5>{{$finds->adresse}}</h5>
                    <h5>{{$finds->telephone}}</h5>
                    <h5>{{$finds->email}}</h5>
                  <p class="card-text"></p>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>


<div class="d-flex justify-content-center m-3 p-3">
    <a href="{{route('gestion_medecin.index') }}" class="btn btn-primary"> Retour</a>
</div>

@endsection
