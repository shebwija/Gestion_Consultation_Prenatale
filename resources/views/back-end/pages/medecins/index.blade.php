@extends('back-end.layouts.main')

@section('content')

<div class="container">
    <h2 class="p-3 mt-3 mb-5 text-center rounded shadow text-primary bg-body">Liste des medecins</h2>
    <a href="{{ route('gestion_medecin.create') }}">
        <button type="submit" class="mb-4 btn btn-outline-primary me-md-2 btn-lg" name="valider">Nouveau</button>
    </a>
    <table class="table datatable p-3 mb-5 rounded shadow bg-body" id="myTable">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">Téléphone</th>
                <th scope="col">Detail</th>
                <th scope="col">Modifier</th>
                <th scope="col">Supprimer</th>
            </tr>
        </thead>
        <tbody>
            @foreach($medecins as $medecin)
            <tr>
                <th scope="row">{{$medecin->id}}</th>
                <td>{{$medecin->nom}}</td>
                <td>{{$medecin->prenom}}</td>
                <td>{{$medecin->telephone}}</td>
                <td> <a class="button" href="{{route('gestion_medecin.show', [$medecin->id]) }}"><img src="{{ asset('assets2/img/more_info.png') }}" style="width:30px;height:30px" alt=""></a> </td>
                <td> <a class="button" href="{{route('gestion_medecin.edit', [$medecin->id]) }}"><img src="{{ asset('assets2/img/del.png') }}" style="width:30px;height:30px" alt=""></a> </td>
                <td><a class="button" href="{{url('supprimer_medecin/'.$medecin->id) }}"><img src="{{ asset('assets2/img/supprimer.png') }}" style="width:30px;height:30px" alt=""></a></td>
                @endforeach
        </tbody>
    </table>
</div
@endsection
