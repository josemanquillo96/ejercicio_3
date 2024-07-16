<?php

namespace App\Http\Controllers;

use App\Models\Traveler;
use Illuminate\Http\Request;

class TravelerController extends Controller
{
    public function listar()
    {
        $travelers = Traveler::orderBy('id', 'desc')->get();
        return view('viajero.listar', compact('travelers'));
    }

    public function create()
    {
        return view('viajero.create');
    }

    public function store(Request $request)
    {
        $traveler = new Traveler();

        $traveler->nombre_viajero = $request->nombre_viajero;
        $traveler->dni = $request->dni;
        $traveler->telefono = $request->telefono;
        $traveler->save();

        return redirect()->route('traveler.listar');
    }

    public function show(Traveler $traveler)
    {
        return view('viajero.show', compact('traveler'));
    }

    public function destroy(Traveler $traveler)
    {
        $traveler->delete();
        return redirect()->route('traveler.listar');
    }

    public function edit(Traveler $traveler)
    {
        return view('viajero.edit', compact('traveler'));
    }

    public function update(Request $request, Traveler $traveler)
    {
        $traveler->nombre_viajero = $request->nombre_viajero;
        $traveler->dni = $request->dni;
        $traveler->telefono = $request->telefono;
        $traveler->save();
        return redirect()->route('traveler.listar');
    }
}
