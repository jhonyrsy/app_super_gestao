<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteContatos extends Model
{
    protected $fillable = ['nome', 'telefone', 'email', 'motivo_contato', 'mensagem'];
}
