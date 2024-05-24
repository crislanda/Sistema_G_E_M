<?php

namespace App\Http\Controllers;

use App\Models\artistas;
use Illuminate\Http\Request;

class artistasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artistas = artistas::all();
        return view('artistas.index', compact('artistas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('artistas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        artistas::create($request->all());
        return redirect()->route('artistas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(artistas $artistas)
    {
        return view('artistas.show', compact('artistas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(artistas $artistas)
    {
        return view('artistas.edit', compact('artistas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, artistas $artistas)
    {
        artistas::update($request->all());
        return redirect()->route('artistas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(artistas $artistas)
    {
        artistas::destroy($artistas->id);
        return redirect()->route('artistas.index');
    }
}
