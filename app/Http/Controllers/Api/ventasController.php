<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ventasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return json_encode(['ventas' => 'ventas']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return json_encode(['ventas' => 'ventas']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       // return json_encode(['ventas' => 'ventas']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return json_encode(['ventas' => 'ventas']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return json_encode(['ventas' => 'ventas']);
    }
}
