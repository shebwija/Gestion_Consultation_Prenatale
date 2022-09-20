@extends('back-end.layouts.main')

@section('content')
    <div class="card">
        <div class="card-body">

            <a class="btn btn-dark mt-3" href="{{ route('gestion_consultations.create') }}">Ajouter consultation</a>
            <h3 class="m-2 text-center text-danger">veillez ajouter les données dans ce formulaire</h3>

            <!-- Multi Columns Form -->
            <form class="row g-3 m-3" method="POST" action="{{route('gestion_consultations.create')}}" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6 mb-2">
                    <label for="inputName5" class="form-label">Tension</label>
                    <input type="text" Name="tension" class="form-control" id="inputName5">
                </div>
                <div class="col-md-6 mb-2">
                    <label for="inputName5" class="form-label">Volume_abdominal</label>
                    <input type="file" Name="volume_abdominal" class="form-control" id="inputName5">
                </div>
                <div class="col-md-12 mb-2">
                    <label for="inputPassword" class="form-label">Respiration</label>
                    <textarea class="form-control" Name="respiration" cols="30" rows="5"></textarea>
                </div>
                <div class="col-md-12 mb-2">
                    <label for="inputPassword" class="form-label">Examen_sang</label>
                    <textarea class="form-control" Name="examen_sang" cols="30" rows="5"></textarea>
                </div>
                <div class="col-md-12 mb-2">
                    <label for="inputPassword" class="form-label">Imagerie</label>
                    <textarea class="form-control" Name="imagerie" cols="30" rows="5"></textarea>
                </div>
                <div class="text-center">
                    <button type="enregistrer" class="btn btn-dark">Enregistrer</button>
                    <button type="edit" class="btn btn-danger">Modifier</button>
                    <button type="delete" class="btn btn-danger">Supprimer</button>
                </div>
            </form><!-- End Multi Columns Form -->

        </div>
    </div>
@endsection
