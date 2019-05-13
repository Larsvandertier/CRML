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
}
