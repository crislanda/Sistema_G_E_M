<?php

namespace App\Http\Controllers;

use App\Models\boletos;
use Illuminate\Http\Request;

class boletosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $boletos = boletos::all();
        return view('boletos.index', compact('boletos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('boletos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        boletos::create($request->all());
        return redirect()->route('boletos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(boletos $boletos)
    {
        return view('boletos.show', compact('boletos'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(boletos $boletos)
    {
        return view('boletos.edit', compact('boletos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, boletos $boletos)
    {
        boletos::update($request->all());
        return redirect()->route('boletos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(boletos $boletos)
    {
        boletos::destroy($boletos->id);
        return redirect()->route('boletos.index');
    }
}
