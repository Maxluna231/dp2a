<?php

namespace App\Http\Controllers;

use App\Models\Computadora;
use App\Http\Requests\StoreComputadoraRequest;
use App\Http\Requests\UpdateComputadoraRequest;
use League\CommonMark\Delimiter\Delimiter;
k
class ComputadoraController extends Controller
{

    public function index()
    {
        return view('papelerias.index')->with('papelerias', Computadora::all());
    }


    public function create()
    {
        return view('papelerias.create');
    }


    public function store(StoreComputadoraRequest $request)
    {
        $request->validate([
            'lapiceros',
            'libretas',
            'gomas',
            'hojas blancas',
            'hojas de colores',
            'precioDeCompra',
            'precioDeVenta',
            'disponible'
        ]);

        Computadora::create([
            'lapiceros'         => $request->lapiceros,
            'libretas'          => $request->libretas,
            'gomas'             => $request->gomas,
            'hojas blancas'     => $request->hojasblancas,
            'hojas de colores'  => $request->hojasDeColores,
            'precioDeCompra'    => $request->precioDeCompra,
            'precioDeVenta'     => $request->precioDeVenta,
            'disponible'        => $request->disponible
        ]);

        return redirect()->route('papelerias.index');
    }


    public function show(Computadora $computadora)
    {
    return view ('papelerias.show' , compact('papelerias'));


    }


    public function edit(Computadora $computadora)
    {
        //
    }


    public function update(UpdateComputadoraRequest $request, Computadora $computadora)
    {
        //
    }


    public function destroy(Computadora $computadora)
    {
        $computadora->delete();
        return redirect()->route('papelerias.index');
    }
    public function datatable()
{
    $Computadoras = Computadora::all();
    return view('papelerias.datatable', compact('papelerias'));
}

}

