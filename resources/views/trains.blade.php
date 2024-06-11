@extends('layouts.app')

@section('content')
    <h1>Pagina Treni</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">N. Treno</th>
                <th scope="col">Azienda</th>
                <th scope="col">Stazione di partenza</th>
                <th scope="col">Stazione di Arrivo</th>
                <th scope="col">Orario di partenza</th>
                <th scope="col">Orario di Arrivo</th>
                <th scope="col">Codice Treno</th>
                <th scope="col">N. Carrozze</th>
                <th scope="col">In Orario</th>
                <th scope="col">In Ritardo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trains as $train)
                <tr>
                    <th scope="row">{{ $train->id }}</th>
                    <td>{{ $train->azienda }}</td>
                    <td>{{ $train->stazione_partenza }}</td>
                    <td>{{ $train->stazione_arrivo }}</td>
                    <td>{{ $train->orario_partenza }}</td>
                    <td>{{ $train->orario_arrivo }}</td>
                    <td>{{ $train->codice_treno }}</td>
                    <td>{{ $train->numero_carrozze }}</td>
                    <td>{{ $train->in_orario === 1 ? 'si' : 'no'}}</td>
                    <td>{{ $train->in_ritardo === 0 ? 'si' : 'no'}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
