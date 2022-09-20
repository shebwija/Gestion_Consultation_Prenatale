@extends('back-end.layouts.main')

@section('content')
<section class="section">
    <h1 class="text-center text-primary p-3">Liste des rendez_vous </h1>
    <div class="container">
        <table class="shadow p-3 mb-5 bg-body rounded table-responsive datatable" id="MyTable">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Age</th>
                    <th scope="col">Profession</th>
                    <th scope="col">Detail</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($patients as $patient)

                    <tr>
                        <th scope="row">{{ $patient->id }}</th>
                        <td>{{ $patient->nom }}</td>
                        <td>{{ $patient->prenom }}</td>
                        <td>{{ $patient->age }}</td>
                        <th scope="row">{{ $patient->profession }}</th>
                        <td> <a class="button" href="{{route('gestion_rendez_vous.show', [$patient->id]) }}"><img src="{{ asset('assets2/img/more_info.png') }}" style="width:30px;height:30px" alt=""></a> </td>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection


