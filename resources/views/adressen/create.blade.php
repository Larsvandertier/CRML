@extends('layout')
@section('content')
    <form method="POST" action="/adressen">
        {{csrf_field()}}
        <div>
            <label>Voornaam: </label>
            <input type="text" name="voornaam">
        </div>
        <div>
            <label>tussenvoegsel: </label>
            <input type="text" name="tussenvoegsel">
        </div>
        <div>
            <label>Achternaam: </label>
            <input type="text" name="achternaam">
        </div>
        <div>
            <label>Email: </label>
            <input type="email" name="mailadres">
        </div>
        <div>
            <label>Telefoonnummer: </label>
            <input type="tel" name="telefoonnummer">
        </div>
        <div>
            <label>Adres: </label>
            <input type="text" name="adres">
        </div>
        <div>
            <label>Postcode: </label>
            <input type="text" name="postcode">
        </div>
        <div>
            <label>Woonplaats: </label>
            <input type="text" name="woonplaats">
        </div>
        <div>
            <label>Afdeling: </label>
            <input type="text" name="afdeling">
        </div>
        <div>
            <button type="submit">Voeg je adres toe!</button>
        </div>
    </form>
@endsection
