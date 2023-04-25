<?php

namespace App\Http\Controllers;

use App\Models\Factura;
use App\Models\TipoFacturacion;
use Illuminate\Http\Request;


class FacturaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $facturas = Factura::join('facturas','fact_formulaid','=','formulas.id');
        //dd($facturas);

        return view('facturas.index', compact('facturas'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tiposfacturacion = TipoFacturacion::all();

        return view('facturas.create', compact('tiposfacturacion'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
