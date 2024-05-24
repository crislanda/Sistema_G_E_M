<?php

namespace App\Http\Controllers;

use App\Models\locaciones;
use Illuminate\Http\Request;

class locacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('locaciones.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('locaciones.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        locaciones::create($request->all());
        return redirect()->route('locaciones.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(locaciones $locaciones)
    {
        return view('locaciones.show', compact('locaciones'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(locaciones $locaciones)
    {
        return view('locaciones.edit', compact('locaciones'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, locaciones $locaciones)
    {
        locaciones::update($request->all());
        return redirect()->route('locaciones.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(locaciones $locaciones)
    {
        locaciones::destroy($locaciones->id);
        return redirect()->route('locaciones.index');
    }
}
