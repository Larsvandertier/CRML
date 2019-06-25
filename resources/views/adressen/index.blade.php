@extends('layout')
@section('content')
    <div class="container" style="margin-top: 2em">
        <h2>Adressen
            <a role="button" class="btn btn-outline-info" href="/adressen/create">Maak er één</a>
            <a role="button" class="btn btn-outline-info" href="/home"><</a>
        </h2>
            <div class="bg-info row text-center">
                <div class="text-light col h4">Voornaam</div>
                <div class="text-light col h4">Tussenvoegsel</div>
                <div class="text-light col h4">Achternaam</div>
            </div>
            @foreach($adressen as $adres)
                <a class="row Kleur1 text-dark border-bottom border-light text-center" href="/adressen/{{$adres->id}}">
                    <div class="col-4">{{$adres->voornaam}}</div>
                    <div class="col-4">{{$adres->tussenvoegsel}}</div>
                    <div class="col-4">{{$adres->achternaam }}</div>
                </a>
            @endforeach
    </div>
@endsection
