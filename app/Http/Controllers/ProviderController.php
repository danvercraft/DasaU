<?php

namespace App\Http\Controllers;

use App\Models\Provider;
use App\Http\Requests\StoreProviderRequest;
use App\Http\Requests\UpdateProviderRequest;
use App\Models\Category;

class ProviderController extends Controller
{

    public function index()
    {
    $providers = Provider::get();
    return view('admin.provider.index', compact('providers'));
    }


    public function create()
    {   
    $categories=Category::get();
    return view('admin.provider.create', compact('categories'));
    }


    public function store(StoreProviderRequest $request)
    {
        if($request->hasFile('picture')){
            $file = $request->file('picture');
            $image_name = time().'_'.$file->getClientOriginalName();
            $file->move(public_path("/image"),$image_name);
        }
        Provider::create($request->all()+ ['firma'=>$image_name]);
        return redirect()->route('providers.index');
    }

    public function show(Provider $provider)
    {
        return view('admin.provider.show', compact('provider'));
    }


    public function edit(Provider $provider)
    {
        return view('admin.provider.edit', compact('provider'));
    }


    public function update(UpdateProviderRequest $request, Provider $provider)
    {
        $provider->update($request->all());
        return redirect()->route('providers.index');
    }


    public function destroy(Provider $provider)
    {
        $provider->delete();
        return redirect()->route('providers.index');
    }
}
