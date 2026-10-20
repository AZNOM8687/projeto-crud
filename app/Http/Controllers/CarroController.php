public function edit(Carro $carro)
    {
        return view('carros.edit', compact('carro'));
    }

    public function update(Request $request, Carro $carro)
    {
        $request->validate([
            'marca' => 'required',
            'modelo' => 'required',
            'ano' => 'required|integer',
            'cor' => 'required',
            'placa' => 'required'
        ]);

        $carro->update($request->all());

        return redirect()->route('carros.index')->with('sucesso', 'Carro atualizado com sucesso!');
    }

    public function destroy(Carro $carro)
    {
        $carro->delete();
        return redirect()->route('carros.index')->with('sucesso', 'Carro apagado com sucesso!');
    }
} // Fecho final do controlador