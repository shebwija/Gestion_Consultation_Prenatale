@extends('back-end.layouts.main')

@section('content')
    <div class="card">
        <div class="card-body">

            <a class="btn btn-dark mt-3" href="{{ route('gestion_rendez_vous.store') }}">Ajouter rdv</a>
            <h3 class="m-2 text-center text-danger">veillez remplir le formilaire pour un rdv</h3>

            <!-- Multi Columns Form -->
            <form class="row g-3" method="POST" action="{{route('gestion_rendez_vous.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6">
                    <label for="inputName5" class="form-label">Type _ rdv</label>
                    <input type="text" name="type_ rdv" class="form-control" id="inputName5">
                </div>
                <div class="col-md-6">
                    <label for="inputEmail5" class="form-label">Date</label>
                    <input type="date" name="date" class="form-control" id="inputEmail5">
                </div>
                <div class="col-md-6 mb-2">
                    <label for="inputPassword" class="form-label">Designation</label>
                    <input type class="form-control" Name="designation" cols="30" rows="5"></input>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-dark">Enregistrer</button>
                </div>
            </form><!-- End Multi Columns Form -->

        </div>
    </div>
@endsection
