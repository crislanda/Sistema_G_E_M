<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class locacionesController extends Controller

{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return json_encode(['locaciones' => 'locaciones']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return json_encode(['locaciones' => 'locaciones']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return json_encode(['locaciones' => 'locaciones']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return json_encode(['locaciones' => 'locaciones']);
    }
}
