<?php

namespace App\Http\Controllers;

use App\Models\Cotizacion;
use App\Http\Requests\StoreCotizacionRequest;
use App\Http\Requests\UpdateCotizacionRequest;
use App\Models\Provider;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class CotizacionController extends Controller
{

    public function index()
    {
        $cotizacions = Cotizacion::get();
        return view('admin.cotizacion.index', compact('cotizacions'));
    }


    public function create()
    {
        $providers = Provider::get();
        return view('admin.cotizacion.index', compact('providers'));

    }


    public function store(StoreCotizacionRequest $request)
    {
        if($request->hasFile('picture')){
            $file = $request->file('picture');
            $image_name = time().'_'.$file->getClientOriginalName();
            $file->move(public_path("/image"),$image_name);
        }
        $cotizacion = Cotizacion::create($request->all()+[
            'provider_id'=>Auth::user()->id,
            'cotizador_id'=>Auth::user()->id,
            'adquisicion_id'=>Auth::user()->id,
            'fecha'=>Carbon::now('America/Lima'),
            'firmaproveedor'=>$image_name,
        ]);

        return redirect()->route('cotizacions.index');
    }


    public function show(Cotizacion $cotizacion)
    {

        return view('admin.cotizacion.show', compact('cotizacion'));

    }


    public function edit(Cotizacion $cotizacion)
    {
        $providers = Provider::get();
        return view('admin.cotizacion.edit', compact('cotizacion'));

    }


    public function update(UpdateCotizacionRequest $request, Cotizacion $cotizacion)
    {
        if($request->hasFile('picture')){
            $file = $request->file('picture');
            $image_name = time().'_'.$file->getClientOriginalName();
            $file->move(public_path("/image"),$image_name);
        }
        $cotizacion->update($request->all()+['firmaproveedor'=>$image_name,]);
        return redirect()->route('cotizacions.index');
    }


    public function destroy(Cotizacion $cotizacion)
    {
        $cotizacion->delete();
        return redirect()->route('cotizacions.index');
    }
}
