<?php

namespace App\Http\Controllers;

use App\Models\Nivel;
use Illuminate\Http\Request;

class NivelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Pagina de inicio
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //formulario para agregar datos
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Para guardar datos en bd de datos
    }

    /**
     * Display the specified resource.
     */
    public function show(Nivel $nivel)
    {
        //Obtner registro de la base de datos
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Nivel $nivel)
    {
        //Para editar datos desde un fromulario
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Nivel $nivel)
    {
        //actaulizar datos desde la base de datos
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nivel $nivel)
    {
        //elimina un registro de la base de datos
    }
}
