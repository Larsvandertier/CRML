@extends('layout')
@section('content')
    <div class="container">
        <h2>Adressen<a role="button" class="btn btn-outline-info" href="/adressen/create">Maak er één</a></h2>
            <table class="table table-hover">
                <thead>
                <tr class="bg-info">
                    <th class="text-light">Voornaam</th>
                    <th class="text-light">Tussenvoegsel</th>
                    <th class="text-light">Achternaam</th>
                    <th></th>
                </tr>
                </thead>
                <tbody class="table-striped b">
                    @foreach($adressen as $adres)
                        <tr class="shadow-sm">
                            <td class="text-dark">{{$adres->voornaam}}</td>
                            <td class="text-dark">{{$adres->tussenvoegsel}}</td>
                            <td class="text-dark">{{$adres->achternaam }}</td>
                            <td><a href="/adressen/{{$adres->id}}">Meer informatie</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
@endsection
