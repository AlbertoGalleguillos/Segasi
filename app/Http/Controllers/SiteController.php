<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\contactForm;
use App\Contact;

class SiteController extends Controller {

    public function index() {
        return view('index');
    }

    public function portfolio() {
        return view('portfolio');
    }
    public function store() {
        //dd(request(['contact','phone','email','message']));
        session()->flash('message', 'Mensaje Enviado Correctamente.');
        Contact::create(request(['contact','phone','email','message']));
        Mail::to(request('email'))->queue(new contactForm);
        return redirect ('/');
    }
    
}
