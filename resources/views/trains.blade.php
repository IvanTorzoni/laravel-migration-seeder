@extends('layouts.app')

@section('content')
    <h1>Pagina Treni</h1>

    @foreach ($trains as $train)
        <li> {{ $train->azienda }} {{ $train->stazione_partenza }} {{ $train->stazione_arrivo }} {{ $train->orario_partenza }} {{ $train->orario_arrivo }} {{ $train->codice_treno }} {{ $train->numero_carrozze }} {{ $train->in_orario }} {{ $train->in_ritardo }} </li>
    @endforeach
@endsection