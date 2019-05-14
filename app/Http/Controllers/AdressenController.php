<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use \App\Adress;

class AdressenController extends Controller
{
    public function index(){
        $adressen = \App\Adress::all();
        return view('adressen.index', ['adressen' => $adressen]);
    }
    public function create(){
        return view('adressen.create');
    }
    public function store(){
        $adres = new Adress();
        $adres->voornaam = request('voornaam');
        $adres->tussenvoegsel = request('tussenvoegsel');
        $adres->achternaam = request('achternaam');
        $adres->mailadres = request('mailadres');
        $adres->telefoonnummer = request('telefoonnummer');
        $adres->adres = request('adres');
        $adres->postcode = request('postcode');
        $adres->woonplaats = request('woonplaats');
        $adres->afdeling = request('afdeling');
        $adres->save();
        return redirect('/adressen');
    }
}
