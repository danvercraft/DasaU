<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Http\Requests\StoreTagRequest;
use App\Http\Requests\UpdateTagRequest;

class TagController extends Controller
{

    public function index()
    {
        $tags = Tag::get();
        return view('admin.tag.index', compact('tags'));
    }


    public function create()
    {
        return view('admin.tag.index', compact('tags'));
    }


    public function store(StoreTagRequest $request)
    {
        Tag::create($request->all());
        return redirect()->route('tags.index');
    }


    public function show(Tag $tag)
    {
        return view('admin.tag.show', compact('tag'));
    }


    public function edit(Tag $tag)
    {
        return view('admin.tag.edit', compact('tag'));
    }


    public function update(UpdateTagRequest $request, Tag $tag)
    {
        $tag->update($request->all());
        return redirect()->route('tags.index');
    }


    public function destroy(Tag $tag)
    {
        $tag->delete();
        return redirect()->route('tags.index');
    }
}
