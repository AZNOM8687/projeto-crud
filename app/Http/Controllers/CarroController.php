<?php

namespace App\Http\Controllers;

use App\Models\Carro;
use Illuminate\Http\Request;

class CarroController extends Controller
{
    public function index()
    {
        $carros = Carro::all();
        return view('carros.index', compact('carros'));
    }

    public function create()
    {
        return view('carros.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'marca' => 'required',
            'modelo' => 'required',
            'ano' => 'required|integer',
            'cor' => 'required',
            'placa' => 'required'
        ]);

        Carro::create($request->all());

        return redirect()->route('carros.index')->with('sucesso', 'Carro registado com sucesso!');
    }

    public function show(Carro $carro) {}
    public function edit(Carro $carro) {}
    public function update(Request $request, Carro $carro) {}
    public function destroy(Carro $carro) {}
}