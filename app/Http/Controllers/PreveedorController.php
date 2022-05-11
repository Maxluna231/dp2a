<?php

namespace App\Http\Controllers;

use App\Models\Preveedor;
use App\Http\Requests\StorePreveedorRequest;
use App\Http\Requests\UpdatePreveedorRequest;

class PreveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proveedores = Preveedor::all();
        return view('proveedores.index' , compact('proveedores'));
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
     * @param  \App\Http\Requests\StorePreveedorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePreveedorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Preveedor  $preveedor
     * @return \Illuminate\Http\Response
     */
    public function show(Preveedor $preveedor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Preveedor  $preveedor
     * @return \Illuminate\Http\Response
     */
    public function edit(Preveedor $preveedor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePreveedorRequest  $request
     * @param  \App\Models\Preveedor  $preveedor
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePreveedorRequest $request, Preveedor $preveedor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Preveedor  $preveedor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Preveedor $preveedor)
    {
        //
    }
}
