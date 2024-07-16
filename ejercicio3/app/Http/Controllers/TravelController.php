<?php

namespace App\Http\Controllers;

use App\Models\Travel;
use Illuminate\Http\Request;

class TravelController extends Controller
{
    public function listar()
    {
        $travels = Travel::orderBy('id', 'desc')->get();
        return view('viaje.listar', compact('travels'));
    }

    public function create()
    {
        return view('viaje.create');
    }

    public function store(Request $request)
    {
        $travel = new Travel();

        $travel->codigo = $request->codigo;
        $travel->num_plaza = $request->num_plaza;
        $travel->fecha = $request->fecha;
        $travel->otros_datos = $request->otros_datos;
        
        $travel->save();

        return redirect()->route('travel.listar');
    }

    public function show(Travel $travel)
    {
        return view('viaje.show', compact('travel'));
    }

    public function destroy(Travel $travel)
    {
        $travel->delete();
        return redirect()->route('travel.listar');
    }

    public function edit(Travel $travel)
    {
        return view('viaje.edit', compact('travel'));
    }

    public function update(Request $request, Travel $travel)
    {
        $travel->codigo = $request->codigo;
        $travel->num_plaza = $request->num_plaza;
        $travel->fecha = $request->fecha;
        $travel->otros_datos = $request->otros_datos;

        $travel->save();
        return redirect()->route('travel.listar');
    }
}
