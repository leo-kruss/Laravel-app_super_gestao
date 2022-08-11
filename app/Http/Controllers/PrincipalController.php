<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MotivoContato;
use Illuminate\View\Component;

use App\resources\views\site\layouts\components\form_contato;

class PrincipalController extends Controller
{
    public function principal(){

        $motivo_contatos = MotivoContato::all();

        return view('site.principal', ['motivo_contatos' => $motivo_contatos]);
    }
}
