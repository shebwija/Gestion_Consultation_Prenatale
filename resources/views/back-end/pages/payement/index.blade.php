@extends('back-end.layouts.main')

@section('content')
<div class="container">
    <h2 class="text-center mt-3 text-primary shadow p-3 mb-5 bg-body rounded">Liste des payements</h2>
    <a href="{{ route('gestion_payement.create') }}">
        <button type="submit" class="btn btn-outline-primary me-md-2 btn-lg mb-4" name="valider">Nouveau</button>
    </a>
    <table class="table shadow p-3 mb-5 bg-body rounded" id="myTable">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Montant</th>
                <th scope="col">Date</th>
                <th scope="col">Consultation</th>
                <th scope="col">DETAIL</th>
                <th scope="col">ENREGISTRER</th>
                <th scope="col">SUPPRIMER</th>
                <th colspan="3">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($payements as $payement)
            <tr>
                <th scope="row">{{$payement->id}}</th>
                <td>{{$payement->Patient->montant}}</td>
                <td>{{$payement->Patient->date}}</td>
                <td>{{$payement->Patient->nom_consult}}</td>
                <td> <a class="button" href="{{route('gestion_payement.show', [$payement->id]) }}"><img src="{{ asset('assets2/img/more_info.png') }}" style="width:30px;height:30px" alt=""></a> </td>
                <td> <a class="button" href="{{route('gestion_payement.save', [$payement->id]) }}"><img src="{{ asset('assets2/img/save.jpg') }}" style="width:30px;height:30px" alt=""></a> </td>
                <td><a class="button" href="{{url('supprimer_payement/'.$payement->id) }}"><img src="{{ asset('assets2/img/supprimer.png') }}" style="width:30px;height:30px" alt=""></a></td>
                @endforeach
        </tbody>
    </table>
</div>

@endsection
