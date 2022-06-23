<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContatos;
use App\MotivoContato;
class ContatoController extends Controller
{
    public function contato(Request $request) {

        $motivo_contatos = MotivoContato::all();

        return view('site.contato', ['titulo' => 'Contato (teste)', 'motivo_contatos' => $motivo_contatos]);
    }


    public function salvar(Request $request) {

        //realizar a validação dos dados do formulário recebidos no request
        $request->validate(
            [
                'nome' => 'required|min:3|max:40',
                'telefone' => 'required',
                'email' => 'email',
                'motivo_contatos_id' => 'required',
                'mensagem' => 'required|max:2000'
            ],
           [
              'nome.required' => 'O campo nome precisa ser preenchido',
              'nome.min' => 'O campo nome precisa ter no minimo 3 caracteres',
              'telefone.required' => 'O campo telefone precisa ser fornecido',

              'required' => 'O campo :attribute deve ser preenchido'
           ]);

        SiteContatos::create($request->all());

        return redirect()->route('site.index');

    }
}
