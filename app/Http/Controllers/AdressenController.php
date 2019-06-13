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
    public function show($id){
        $adres = Adress::findOrFail($id);
        return view('adressen.show',compact('adres'));
    }
    public function store(){
        request()->validate([
            'voornaam' => ['required', 'min:3', 'max:20'],
            'tussenvoegsel',
            'achternaam' => ['required', 'min:3', 'max:20'],
            'mailadres' => ['required'],
            'telefoonnummer' => ['required'],
            'adres' => ['required'],
            'postcode' => ['required'],
            'woonplaats' => ['required'],
            'afdeling' => ['required']
        ]);

        Adress::create([
        'voornaam' => request('voornaam'),
        'tussenvoegsel' => request('tussenvoegsel'),
        'achternaam' => request('achternaam'),
        'mailadres' => request('mailadres'),
        'telefoonnummer' => request('telefoonnummer'),
        'adres' => request('adres'),
        'postcode' => request('postcode'),
        'woonplaats' => request('woonplaats'),
        'afdeling' => request('afdeling')
        ]);



//        $adres->save();

        return redirect('/adressen');
    }
    public function edit($id){
        $adres = Adress::findOrFail($id);
        return view('adressen.edit', compact('adres'));
    }
    public function update($id){
        $adres = Adress::findOrFail($id);

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
    public function destroy($id){
        $adres = Adress::findOrFail($id);
        $adres->delete();

        return redirect('/adressen');
    }
}
