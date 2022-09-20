@extends('back-end.layouts.main')

@section('content')

<h2 class="text-center text-primary p-3">ENREGISTRER UN MEDECIN</h2>
    <h4 class="text-center p-2">Veuillez remplir ce formulaire SVP!</h4>
    <div class="container">
        <form method="POST" class="shadow p-3 mb-5 bg-body rounded" action="{{ route('gestion_medecin.store') }}"
            enctype="multipart/form-data">
            @csrf
            <div class="container">
                <div class="row g-2">
                    <div class="col-6">
                        <label for="exampleInputEmail1" class="form-label">NOM</label>
                        <input type="text" class="form-control" name="nom" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="col-6">
                        <label for="exampleInputEmail1" class="form-label">PRENOM</label>
                        <input type="text" class="form-control" name="prenom" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>

                    <div class="col-6">
                        <label for="exampleInputEmail1" class="form-label">TELEPHONE</label>
                        <input type="number" class="form-control" name="telephone" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="col-6">
                        <label for="exampleInputEmail1" class="form-label">ADRESSE</label>
                        <input type="text" class="form-control" name="adresse" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>

                    <div class="col-6">
                        <label for="inputEmail5" class="form-label">SPECIALITE</label>
                        <input type="text" class="form-control" name="specialite" id="exampleInputEmail1">
                    </div>

                    <div class="col-6">
                        <label class="col-md-8 control-label">GENRE</label>
                            <select class="form-select" type="text" aria-label="Default select example" name="genre">
                                <option selected>...</option>
                                <option value="Masculin">Masculin</option>
                                <option value="Feminin">Feminin</option>
                            </select>
                    </div>

                    <div class="col-6">
                        <label for="exampleInputEmail1" class="form-label">EMAIL</label>
                        <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>

                    <div class="col-6">
                        <label for="inputZip" class="form-label">PHOTO</label>
                        <input type="file" name="photo" class="form-control" id="inputZip">
                    </div>
                </div>
            </div>
            <div class="container d-flex mt-3">
                <div>
                    <button type="submit" class="btn btn-outline-info w-100">Enregistrer</button>
                </div> &nbsp;&nbsp;&nbsp;
                <div>
                    <button type="reset" class="btn btn-outline-primary w-100">Annuler</button>
                </div>
            </div>
        </form>
    </div>
@endsection
