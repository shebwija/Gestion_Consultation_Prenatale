@extends('back-end.layouts.main')

@section('content')
	<div class="card">
		<div class="card-body">

			<a class="btn btn-dark mt-3" href="{{ route('gestion_patient.index') }}">Liste patient</a>
			<h3 class="m-2 text-center text-danger">Modification de la liste patient: {{$finds->id}}</h3>

			<!-- Multi Columns Form -->
			<form class="row g-3" method="POST" action="{{route ('gestion_patient.update', [$finds->id])}}"
				enctype="multipart/form-data">
				@method('PATCH')
				@csrf
				<div class="col-md-6">
					<label for="inputEmail5" class="form-label">Nom </label>
					<input type="text" name="nom" value="{{$finds->nom}}" class="form-control" id="inputEmail5">
				</div>
				<div class="col-md-6">
					<label for="inputPassword5" class="form-label">Prenom</label>
					<input type="text" name="prenom" value="{{$finds->prenom}}" class="form-control" id="inputPassword5">
				</div>
				<div class="col-md-6">
					<label for="inputZip" class="form-label">Age</label>
					<input type="number" name="age" class="form-control" id="inputZip">
				</div>
				<div class="col-md-6">
					<label for="inputZip" name="nombre_cpn" class="form-label">Nombre_cpn</label>
					<input type="number" class="form-control" id="inputZip">
				</div>
				<div class="col-md-6">
					<label for="inputZip" name="mois_grossesse" class="form-label">Mois_grossesse</label>
					<input type="number" class="form-control" id="inputZip">
				</div>
				<div class="col-md-6">
					<label for="inputZip" name="profession" class="form-label">Profession</label>
					<input type="text" class="form-control" id="inputZip">
				</div>
				<div class="col-md-6 mb-12">
					<label for="inputPassword" class="form-label">Adresse</label>
					<textarea class="form-control" Name="adresse" cols="30" rows="3"></textarea>
					<div class="col-md-6 mb-12">
						<label for="inputPassword" class="form-label">Telephone</label>
						<textarea class="form-control" Name="telephone" cols="30" rows="3"></textarea>
					</div>
					<div class="col-md-6 mb-8">
						<label for="inputPassword" class="form-label">Email</label>
						<textarea class="form-control" Name="adresse" cols="30" rows="3"></textarea>
					</div>
				</div>
                <div class="container d-flex">
                    <button type="submit" class="btn btn-success me-5 text-light">Modifier</button>
                    <a class="" style="color: black;" href="{{route('gestion_patient.index') }}">
                        <button type="submit" class="btn btn-danger">Retour à la liste</button>
                    </a>
                </div>
			</form><!-- End Multi Columns Form -->

		</div>
	</div>
@endsection
