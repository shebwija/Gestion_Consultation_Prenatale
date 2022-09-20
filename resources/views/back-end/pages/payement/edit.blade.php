@extends('back-end.layouts.main')

@section('content')
    <div class="card">
        <div class="card-body">

            <a class="btn btn-dark mt-3" href="{{ route('gestion_payement.update') }}">Liste payement</a>
            <h3 class="m-2 text-center text-danger">MODIFICATION DE LA LISTE PAYEMENT: {{$finds->id}}</h3>

            <!-- Multi Columns Form -->
            <form class="row g-3" method="POST" action="{{route ('gestion_payement.update', [$finds->id])}}}" enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                <div class="col-md-12">
                    <label for="inputEmail5" class="form-label">Montant</label>
                    <input type="text" name="montant_payement" class="form-control" value="{{$finds->montant_payement}}" id="inputEmail5">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword5" class="form-label">Date</label>
                    <input type="text" name="date" class="form-control" value="{{$finds->date}}" id="inputPassword5">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-dark">Enregistrer</button>
                    <button type="reset" class="btn btn-danger">Annuler</button>
                </div>
            </form><!-- End Multi Columns Form -->
        </div>
    </div>
@endsection
