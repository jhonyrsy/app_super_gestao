<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContatos;

class ContatoController extends Controller
{
    public function contato(Request $request) {

        return view('site.contato', ['titulo'=> 'Contato (teste)']);
    }

    public function salvar(Request $request) {

         //realizar a validação dos dados do formulário recebidos no request
         $request->validate([
            'nome' => 'required',
            'telefone' => 'required',
            'email' => 'required',
            'motivo_contato' => 'required',
            'mensagem' => 'required'
        ]);
        
        // SiteContatos::create($request->all());

    }
}
