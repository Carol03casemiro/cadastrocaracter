<?php

namespace App\Http\Controllers;

use App\Models\caracter;
use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function create()
    {
        return view('cadastro');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string',
            'personagem' => 'required|string',
            'elemente' => 'required|string',
            'classe' => 'required|string',
        ]);

        Caracter::create($request->all());

        return redirect('/cadastro')->with('success', 'Cadastro realizado com sucesso!');
    }
}

