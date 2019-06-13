@extends('layout')
@section('content')


    <div class="container">
        <h2>Informatie
            <a role="button" class="btn btn-outline-info" href="/adressen"><</a>
            <a role="button" class="btn btn-outline-info" href="/adressen/{{$adres->id}}/edit">Edit</a>
        </h2>
        <table class="table table-hover">
            <thead class="bg-info text-light">
            <tr>
                <th class="h4">{{$adres->voornaam}}</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th>Tussenvoegsel</th>
                <td>{{$adres->tussenvoegsel}}</td>
            </tr>
            <tr>
                <th>Achternaam</th>
                <td>{{$adres->achternaam}}</td>
            </tr>
            <tr>
                <th>Mailadres</th>
                <td>{{$adres->mailadres}}</td>
            </tr>
            <tr>
                <th>Telefoonnummer</th>
                <td>{{$adres->telefoonnummer}}</td>
            </tr>
            <tr>
                <th>Adres</th>
                <td>{{$adres->adres}}</td>
            </tr>
            <tr>
                <th>postcode</th>
                <td>{{$adres->postcode}}</td>
            </tr>
            <tr>
                <th>Woonplaats</th>
                <td>{{$adres->woonplaats}}</td>
            </tr>
            <tr>
                <th>Afdeling</th>
                <td>{{$adres->afdeling}}</td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection