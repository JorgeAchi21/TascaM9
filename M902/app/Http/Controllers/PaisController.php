<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaisController extends Controller
{
    public function index(){
        //return 'pais index:Index';
        return view('paises.index');
    }

    public function store(){
        //return 'pais.store:store';
        return view('paises.store');
    }
    
    public function show($pais) {
        //return 'pais.show: show '. $pais . '-' . $departamento;
        return view('paises.show', compact('pais'));
    }
    
    public function update($pais) {
        //return 'pais.update: update '.$pais;
        return view('paises.update', compact('pais'));
    }

    public function destroy($pais) { 
        //return 'pais.destroy: destroy ' . $pais;
        return view('paises.destroy', compact('pais'));
    }
}
