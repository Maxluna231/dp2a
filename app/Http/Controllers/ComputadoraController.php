<?php

namespace App\Http\Controllers;

use App\Models\Computadora;
use App\Http\Requests\StoreComputadoraRequest;
use App\Http\Requests\UpdateComputadoraRequest;

class ComputadoraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $computadoras = Computadora::all();
        return view('computadoras.index', compact('computadoras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreComputadoraRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreComputadoraRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Computadora  $computadora
     * @return \Illuminate\Http\Response
     */
    public function show(Computadora $computadora)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Computadora  $computadora
     * @return \Illuminate\Http\Response
     */
    public function edit(Computadora $computadora)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateComputadoraRequest  $request
     * @param  \App\Models\Computadora  $computadora
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateComputadoraRequest $request, Computadora $computadora)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Computadora  $computadora
     * @return \Illuminate\Http\Response
     */
    public function destroy(Computadora $computadora)
    {
        //
    }
}
