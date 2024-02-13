@extends('layouts.main-layout')

@section('head')
    <title>Home</title>
@endsection

@section('content')
    <h1>TRENI:</h1>
    <ul style="list-style: none;">
        @foreach($trains as $train)
            <li>{{ $train->azienda }}---Partenza:{{$train->stazione_partenza}}/Ore{{$train->orario_partenza}}---{{$train->stazione_arrivo}}/Ore:{{$train->orario_arrivo}}</li>
        @endforeach
    </ul>
@endsection

