@extends('back-end.layouts.main')

@section('content')

<div class="container">
    <h2 class="text-center mt-3 text-primary shadow p-3 mb-5 bg-body rounded">Liste des consultations</h2>
    <a href="{{ route('gestion_payement.create') }}">
        <button type="submit" class="btn btn-outline-primary me-md-2 btn-lg mb-4" name="valider">Nouveau</button>
    </a>
    <table class="table shadow p-3 mb-5 bg-body rounded" id="myTable">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Tension</th>
                <th scope="col">Respiration</th>
                <th scope="col">Volume_abdominal</th>
                <th scope="col">Examen_sang</th>
                <th scope="col">Imagerie</th>
                <th scope="col">DETAIL</th>
                <th scope="col">MODIFIER</th>
                <th scope="col">SUPPIMER</th>
            </tr>
        </thead>
        <tbody>
            @foreach($consultations as $consultation)
            <tr>
                <th scope="row">{{$consultation->id}}</th>
                <td>{{$consultation->Tension}}</td>
                <td>{{$consultation->Respiiration}}</td>
                <td>{{$consultation->Volume_abdominal}}</td>
                <td>{{$consultation->Exame_sang}}</td>
                <td>{{$consultation->Imagerie}}</td>
                <td> <a class="button" href="{{route('gestion_consultation.show', [$consultation->id]) }}"><img src="{{ asset('assets2/img/more_info.png') }}" style="width:30px;height:30px" alt=""></a> </td>
                <td> <a class="button" href="{{route('gestion_consultation.edit', [$consultation->id]) }}"><img src="{{ asset('assets2/img/del.png') }}" style="width:30px;height:30px" alt=""></a> </td>
                <td><a class="button" href="{{url('supprimer_consultation/'.$consultation->id) }}"><img src="{{ asset('assets2/img/supprimer.png') }}" style="width:30px;height:30px" alt=""></a></td>
                @endforeach
        </tbody>
    </table>
</div
@endsection
