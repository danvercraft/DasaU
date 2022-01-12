<?php

namespace App\Http\Controllers;

use App\Models\Cotizaciondetalle;
use App\Http\Requests\StoreCotizaciondetalleRequest;
use App\Http\Requests\UpdateCotizaciondetalleRequest;
use App\Models\Oficiodetalle;

class CotizaciondetalleController extends Controller
{

    public function index()
    {
    $cotizaciondetalles = Cotizaciondetalle::get();
    return view('admin.cotizaciondetalle.index', compact('cotizaciondetalles'));        
    }


    public function create()
    {
        $cotizaciondetalles=Cotizaciondetalle::get();
        $oficiodetalles=Oficiodetalle::get();   
        return view('admin.cotizaciondetalle.create', compact('cotizaciondetalles','oficiodetalles'));        
    }

    public function store(StoreCotizaciondetalleRequest $request)
    {
        Cotizaciondetalle::create($request->all());
        return redirect()->route('cotizaciondetalles.index');        
    }


    public function show(Cotizaciondetalle $cotizaciondetalle)
    {
        return view('admin.cotizaciondetalle.show', compact('cotizaciondetalle'));        
    }


    public function edit(Cotizaciondetalle $cotizaciondetalle)
    {
        return view('admin.cotizaciondetalle.edit', compact('cotizaciondetalle'));        
    }


    public function update(UpdateCotizaciondetalleRequest $request, Cotizaciondetalle $cotizaciondetalle)
    {
        $cotizaciondetalle->update($request->all());
        return redirect()->route('cotizaciondetalles.index');        
    }

    public function destroy(Cotizaciondetalle $cotizaciondetalle)
    {
        $cotizaciondetalle->delete();
        return redirect()->route('cotizaciondetalles.index');        
    }
}
