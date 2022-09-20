@extends('back-end.layouts.main')

@section('content')
    <div class="card">
        <div class="card-body">

            <a class="btn btn-dark mt-3" href="{{ route('gestion_medecin.update') }}">Modifier liste  medecin </a>
            <h3 class="m-2 text-center text-danger">Modification de données liste de medcins </h3>

            <!-- Multi Columns Form -->
            <form class="row g-3" method="POST" action="{{route('gestion_medecin.update')}}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="col-md-6 mb-2">
                    <label for="inputName5" class="form-label">Nom</label>
                    <input type="text" Name="nom" value="{{$medecin->nom}}" class="form-control" id="inputName5">
                </div>
                <div class="col-md-6 mb-2">
                    <label for="inputName5" class="form-label">Prenom</label>
                    <input type="text" Name="prenom" value="{{$medecin->prenom}}" class="form-control" id="inputName5">
                </div
                <div class="col-md-6">
                    <label for="inputSpeciality5" class="form-label">Specialite</label>
                    <input type="text" name="specialite_prog" class="form-control" id="inputEmail5">
                </div>
                <div class="col-md-6">
                    <label for="inputGender5" class="form-label">Genre</label>
                    <input type="text" name="genre_prog" class="form-control" id="inputEmail5">
                    <select class="form-select" type="text" aria-label="Default select example" name="genre">
                        <option selected> Genre </option>
                        <option value="Masculin">Masculin</option>
                        <option value="Feminin">Feminin</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="inputZip" class="form-label">Adresse</label>
                    <input type="file" name="adresse" class="form-control" id="inputZip">
                </div>
                <div class="col-md-12 mb-12">
                    <label for="inputPassword" class="form-label">Telephone</label>
                    <textarea class="form-control" Name="telephone" cols="30" rows="5"></textarea>
                </div>
                <div class="col-md-6">
                    <label for="inputEmail5" class="form-label">Email </label>
                    <input type="text" name="email_prog" class="form-control" id="inputEmail5">
                </div>
               iv>
                <div class="text-center">
                    <button type="edit" class="btn btn-dark">Modifier</button>
                </div>
            </form><!-- End Multi Columns Form -->

        </div>
    </div>
@endsection
