<?php

namespace App\Http\Controllers;

use App\Models\eventos;
use Illuminate\Http\Request;

class eventosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('eventos.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('eventos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        eventos::create($request->all());
        return redirect()->route('eventos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(eventos $eventos)
    {
        return view('eventos.show', compact('eventos'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(eventos $eventos)
    {
        return view('eventos.edit', compact('eventos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, eventos $eventos)
    {
        eventos::update($request->all());
        return redirect()->route('eventos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(eventos $eventos)
    {
        eventos::destroy($eventos->id);
        return redirect()->route('eventos.index');
    }
}
