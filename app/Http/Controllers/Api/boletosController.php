<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class boletosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Boleto::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return Boleto::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //return Boleto::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return Boleto::find($id)->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return Boleto::find($id)->delete();
    }
}
