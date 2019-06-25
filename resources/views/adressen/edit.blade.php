@extends('layout')
@section('content')
    <div class="container" style="margin-top: 2em">
        <h2>Bewerk: {{$adres->voornaam}}
            <a role="button" class="btn btn-outline-info" href="/adressen/{{$adres->id}}"><</a>
        </h2>
        <form class="needs-validation" method="POST" action="/adressen/{{$adres->id}}">
            @method('patch')
            @csrf

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="colFormLabelSm"
                           class="col-sm-1 col-form-label col-form-label-sm text-dark">Voornaam
                    </label>
                </div>
                <div class="col-sm-5">
                    <input type="text"
                           class="form-control form-control-sm {{$errors->has('voornaam')?  'border-danger':'' }}"
                           name="voornaam" id="colFormLabelSm" value="{{$adres->voornaam}}">
                </div>
                @if($errors->has('voornaam'))
                    <div class="text-danger">
                        vul in
                    </div>
                @endif
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="colFormLabelSm"
                           class="col-sm-1 col-form-label col-form-label-sm text-dark">tussenvoegsel
                    </label>
                </div>
                <div class="col-sm-5">
                    <input type="text"
                           class="form-control form-control-sm"
                           name="tussenvoegsel" id="colFormLabelSm" value="{{$adres->tussenvoegsel}}">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="colFormLabelSm"
                           class="col-sm-1 col-form-label col-form-label-sm text-dark">Achternaam
                    </label>
                </div>
                <div class="col-sm-5">
                    <input type="text"
                           class="form-control  {{$errors->has('achternaam')?  'border-danger':'' }} form-control-sm"
                           name="achternaam" id="colFormLabelSm" value="{{$adres->achternaam}}">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="colFormLabelSm"
                           class="col-sm-1 col-form-label col-form-label-sm text-dark">Email
                    </label>
                </div>
                <div class="col-sm-5">
                    <input type="text"
                           class="form-control  {{$errors->has('mailadres')?  'border-danger':'' }} form-control-sm"
                           name="mailadres" id="colFormLabelSm" value="{{$adres->mailadres}}">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="colFormLabelSm"
                           class="col-sm-1 col-form-label col-form-label-sm text-dark">Tel.
                    </label>
                </div>
                <div class="col-sm-5">
                    <input type="text"
                           class="form-control  {{$errors->has('telefoonnummer')?  'border-danger':'' }} form-control-sm"
                           name="telefoonnummer" id="colFormLabelSm" value="{{$adres->telefoonnummer}}">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="colFormLabelSm"
                           class="col-sm-1 col-form-label col-form-label-sm text-dark">Adres
                    </label>
                </div>
                <div class="col-sm-5">
                    <input type="text"
                           class="form-control  {{$errors->has('adres')?  'border-danger':'' }} form-control-sm"
                           name="adres" id="colFormLabelSm" value="{{$adres->adres}}">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="colFormLabelSm"
                           class="col-sm-1 col-form-label col-form-label-sm text-dark">Postcode
                    </label>
                </div>
                <div class="col-sm-5">
                    <input type="text"
                           class="form-control  {{$errors->has('postcode')?  'border-danger':'' }} form-control-sm"
                           name="postcode" id="colFormLabelSm" value="{{$adres->postcode}}">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="colFormLabelSm"
                           class="col-sm-1 col-form-label col-form-label-sm text-dark">Woonplaats
                    </label>
                </div>
                <div class="col-sm-5">
                    <input type="text"
                           class="form-control  {{$errors->has('woonplaats')?  'border-danger':'' }} form-control-sm"
                           name="woonplaats" id="colFormLabelSm" value="{{$adres->woonplaats }}">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="colFormLabelSm"
                           class="col-sm-1 col-form-label col-form-label-sm text-dark">Afdeling
                    </label>
                </div>
                <div class="col-sm-5">
                    <input type="text"
                           class="form-control  {{$errors->has('afdeling')?  'border-danger':'' }} form-control-sm"
                           name="afdeling" id="colFormLabelSm" value="{{$adres->afdeling}}">
                </div>
                @if($errors->has('afdeling'))
                    <div class="text-danger">
                        vul in
                    </div>
                @endif
            </div>
            <br>
            <button class="btn btn-outline-info btn-block" type="submit">Bewerk het</button>
            <br>
        </form>
            <form method="post" action="/adressen/{{$adres->id}}">
                @method('delete')
                @csrf

                <button class="btn btn-outline-danger btn-block" type="submit">Verwijder het!</button>
        </form>
    </div>
</div>
@endsection