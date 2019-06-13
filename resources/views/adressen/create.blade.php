@extends('layout')
@section('content')
<div class="container">
    <h2>Maak een adres aan<a role="button" class="btn btn-outline-info" href="/adressen"><</a></h2>
    <form class="needs-validation" method="POST" action="/adressen">
        @csrf

        <div class="form-group row">
            <div class="col-sm-3">
                <label for="colFormLabelSm"
                       class="col-sm-1 col-form-label col-form-label-sm text-dark">Voornaam
                </label>
            </div>
            <div class="col-sm-5">
                <input type="text"
                       class="form-control {{$errors->has('voornaam')?  'border-danger form-feedback-icon-invalid':'' }} form-control-sm"
                       name="voornaam" id="colFormLabelSm" value="{{ old('voornaam') }}">
            </div>
            <div class="invalid-feedback">
                Looks good!
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
                       name="tussenvoegsel" id="colFormLabelSm" value="{{ old('tussenvoegsel') }}">
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
                       name="achternaam" id="colFormLabelSm" value="{{ old('achternaam') }}">
            </div>
            @if($errors->has('achternaam'))
                <div class="text-danger">
                    vul in
                </div>
            @endif
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
                       name="mailadres" id="colFormLabelSm" value="{{ old('mailadres') }}">
            </div>
            @if($errors->has('mailadres'))
                <div class="text-danger">
                    vul in
                </div>
            @endif
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
                       name="telefoonnummer" id="colFormLabelSm" value="{{ old('telefoonnummer') }}">
            </div>
            @if($errors->has('telefoonnummer'))
                <div class="text-danger">
                    vul in
                </div>
            @endif
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
                       name="adres" id="colFormLabelSm" value="{{ old('adres') }}">
            </div>
            @if($errors->has('adres'))
                <div class="text-danger">
                    vul in
                </div>
            @endif
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
                       name="postcode" id="colFormLabelSm" value="{{ old('postcode') }}">
            </div>
            @if($errors->has('postcode'))
                <div class="text-danger">
                    vul in
                </div>
            @endif
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
                       name="woonplaats" id="colFormLabelSm" value="{{ old('woonplaats') }}">
            </div>
            @if($errors->has('woonplaats'))
                <div class="text-danger">
                    vul in
                </div>
            @endif
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
                      name="afdeling" id="colFormLabelSm" value="{{ old('afdeling') }}">
            </div>
            @if($errors->has('afdeling'))
                <div class="text-danger">
                    vul in
                </div>
                @endif
        </div>
        <div>
            <button class="btn btn-outline-info btn-block" type="submit">Maak het aan</button>
        </div>
    </form>
</div>
@endsection
