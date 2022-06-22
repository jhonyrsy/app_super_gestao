<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContatos;

class ContatoController extends Controller
{
    public function contato(Request $request) {
        
        $contato =  new SiteContatos();
        
        $contato->create($request->all());
       
        return view('site.contato', ['titulo'=> 'Contato (teste)']);
    }
}
