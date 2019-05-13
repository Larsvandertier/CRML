@extends('layout')
@section('content')
    @foreach($adressen as $adres)
        <ol>
            <li>{{$adres->voornaam}} {{$adres->tussenvoegsel}} {{$adres->achternaam }}</li>
        </ol>
    @endforeach
@endsection
