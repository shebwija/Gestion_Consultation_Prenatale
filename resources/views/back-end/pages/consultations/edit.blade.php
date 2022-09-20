@extends('back-end.layouts.main')

@section('content')
    <div class="card">
        <div class="card-body">

            <a class="btn btn-dark mt-3" href="{{ route('gestion_consultation.update') }}">Modifier les données d'une consultation</a>
            <h3 class="m-2 text-center text-danger">veillez remplir pour modifier une consultation: {{$consultation->id}}</h3>

            <!-- Multi Columns Form -->
            <form class="row g-3 m-3" method="POST" action="{{route ('gestion_consultation.update', [$consultation->id])}}" enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                <div class="col-md-6 mb-2">
                    <label for="inputName5" class="form-label">Tension</label>
                    <input type="text" Name="tension" value="{{$consultation->nom}}" class="form-control" id="inputName5">
                </div>
                <div class="col-md-6 mb-2">
                    <label for="inputName5" class="form-label">Respiration</label>
                    <input type="file" Name="respiration" class="form-control" id="inputName5">
                </div>
                <div class="col-md-12 mb-2">
                    <label for="inputPassword" class="form-label">Volume_abdominal</label>
                    <textarea class="form-control" Name="volume_abdominal" cols="30" rows="5"></textarea>
                </div>
                <div class="col-md-12 mb-2">
                    <label for="inputPassword" class="form-label">Examen_sang</label>
                    <textarea class="form-control" Name="examen_sang" cols="30" rows="5"></textarea>
                </div>
                <div class="col-md-12 mb-2">
                    <label for="inputPassword" class="form-label">Imagerie</label>
                    <textarea class="form-control" Name="imagerie" cols="30" rows="5"></textarea>
                </div>
                <div class="container d-flex">
                        <div>
                            <button type="submit" class="btn btn-info w-100"  onclick="return confirm('Voulez-vous vraiment modifier?')">Modifier</button>
                        </div>
                </div>
            </form><!-- End Multi Columns Form -->

        </div>
    </div>
@endsection
