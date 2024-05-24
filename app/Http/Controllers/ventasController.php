<?php

namespace App\Http\Controllers;

use App\Models\ventas;
use Illuminate\Http\Request;

class ventasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('ventas.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ventas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        ventas::create($request->all());
        return redirect()->route('ventas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(ventas $ventas)
    {
        return view('ventas.show', compact('ventas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ventas $ventas)
    {
        return view('ventas.edit', compact('ventas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ventas $ventas)
    {
        ventas::update($request->all());
        return redirect()->route('ventas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ventas $ventas)
    {
        ventas::destroy($ventas->id);
        return redirect()->route('ventas.index');
    }
}
