@extends('back-end.layouts.main')

@section('content')
    <div class="card">
        <div class="card-body">

            <a class="btn btn-dark mt-3" href="{{ route('gestion_rdv.update') }}">Liste de rdv</a>
            <h3 class="m-2 text-center text-danger">MODIFICATION DE LA LISTE DE RDV: {{$finds->id}}</h3>

            <!-- Multi Columns Form -->
            <form class="row g-3" method="POST" action="{{route ('gestion_rdv.update', [$finds->id])}}}" enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                <div class="col-md-12">
                    <label for="inputEmail5" class="form-label">Type _ rdv</label>
                    <input type="text" name="type_rdv" class="form-control" value="{{$finds->type_rdv}}" id="inputEmail5">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword5" class="form-label">Date</label>
                    <input type="text" name="date" class="form-control" value="{{$finds->date}}" id="inputPassword5">
                </div>
                <div class="container d-flex">
                    <button type="submit" class="btn btn-success me-5 text-light">Modifier</button>
                    <a class="" style="color: black;" href="{{route('gestion_rdv.index') }}">
                        <button type="submit" class="btn btn-danger">Retour à la liste</button>
                    </a>
                </div>
            </form><!-- End Multi Columns Form -->
        </div>
    </div>
@endsection
