@extends('layout')
@section('content')
    <h1> Adressen</h1>
    @foreach($adressen as $adres)
        <ol>
            <li>{{$adres->voornaam}} {{$adres->tussenvoegsel}} {{$adres->achternaam }}</li>
        </ol>
    @endforeach
@endsection
