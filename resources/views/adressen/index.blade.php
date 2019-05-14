@extends('layout')
@section('content')
    <h1> Adressen</h1>
    @foreach($adressen as $adres)
        <ul>
            <li>{{$adres->voornaam}} {{$adres->tussenvoegsel}} {{$adres->achternaam }}</li>
        </ul>
    @endforeach
@endsection
