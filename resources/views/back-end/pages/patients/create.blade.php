@extends('back-end.layouts.main')

@section('content')
    <div class="card">
        <div class="card-body">

            <a class="btn btn-dark mt-3" href="{{ route('gestion_patient.store') }}">Ajouter patient </a>
            <h3 class="m-2 text-center text-danger">Remplir ce formulaire pour ajouter patient</h3>

            <!-- Multi Columns Form -->
            <form class="row g-3" method="post" action="{{route('gestion_patient.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6">
                    <label for="inputEmail5" class="form-label">Nom </label>
                    <input type="text" name="nom" class="form-control" id="inputEmail5">
                </div>
                <div class="col-md-6">
                    <label for="inputEmail5" class="form-label">Prenom </label>
                    <input type="text" name="prenom" class="form-control" id="inputEmail5">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword5" class="form-label">Age</label>
                    <input type="number" name="age" class="form-control" id="inputPassword5">
                </div>
                <div class="col-md-6">
                    <label for="inputZip" class="form-label">Profession</label>
                    <input type="text" name="profession" class="form-control" id="inputZip">
                </div>
                <div class="col-md-6">
                    <label for="inputZip" class="form-label">Mois de grossesse</label>
                    <input type="number" name="mois_grossesse" class="form-control" id="inputZip">
                </div>
                <div class="col-md-6">
                    <label for="inputZip" class="form-label">Nombre de CPN</label>
                    <input type="number" name="nombre_cpn" class="form-control" id="inputZip">
                </div>
                <div class="col-md-6">
                    <label for="inputZip" class="form-label">Adresse</label>
                    <input type="text" name="adresse" class="form-control" id="inputZip">
                </div>
                <div class="col-md-6">
                    <label for="inputZip" class="form-label">Téléphone</label>
                    <input type="number" name="telephone" class="form-control" id="inputZip">
                </div>
                <div class="col-md-6">
                    <label for="inputZip" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="inputZip">
                </div>>
                <div class="text-center">
                    <button type="submit" class="btn btn-dark">Enregistrer</button>
                    <button type="reset" class="btn btn-danger">Annuler</button>
                </div>
            </form><!-- End Multi Columns Form -->

        </div>
    </div>
@endsection
