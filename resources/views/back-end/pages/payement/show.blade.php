extends('layout.main')
@section('contenu')
<h1 class="text-center text-primary m-3">DETAIL Du PAYEMENT {{$finds->id}}</h1>
<div class="container d-flex m-4 p-4">
    <div class="col-md-8">
        <label for="">MONTANT : </label> <span>  {{$finds->montant}} </span> <br>
        <label for="">DATE : </label><span> {{$finds->date}}</span> <br>
    </div>
</div>
<div class="d-flex justify-content-center m-3 p-3">
    <a href="{{route('gestion_payement.create') }}" class="btn btn-primary"> Retour</a>
</div>

@endsection
