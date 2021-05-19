<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    public function index($pais){
        //return 'Pais+Departamento index';
        return view('departamento.index', compact('pais'));
    }

    public function store($pais){
        //return 'Pais+Departamento store';
        return view('departamento.store', compact('pais'));
    }
    
    public function show($pais, $departamento) {
        //return 'Pais+Departamento show: '. $pais . '-' . $departamento;
        return view('departamento.show', compact('pais', 'departamento'));
    }
    
    public function update($pais, $departamento) {
        //return 'Pais+departamento update: '.$pais . '-' . $departamento;
        return view('departamento.update', compact('pais', 'departamento'));
    }

    public function destroy($pais, $departamento) {
        //return 'Pais+Departamento destroy: ' . $pais. '-' . $departamento;
        return view('departamento.destroy', compact('pais', 'departamento'));
    }
}
