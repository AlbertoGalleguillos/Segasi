<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller {

    public function index() {
        return view('index');
    }

    public function portfolio() {
        return view('portfolio');
    }
    public function store() {
        session()->flash('message', 'Mensaje Enviado Correctamente.');
        return redirect ('/');
    }
    
}
