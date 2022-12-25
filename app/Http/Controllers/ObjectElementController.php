<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreObjectElementRequest;
use App\Http\Requests\UpdateObjectElementRequest;
use App\Models\ObjectElement;

class ObjectElementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $objectElements = ObjectElement::all();
        return view('admin.object_element.index', compact('objectElements'));
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
     * @param  \App\Http\Requests\StoreObjectElementRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreObjectElementRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ObjectElement  $objectElement
     * @return \Illuminate\Http\Response
     */
    public function show(ObjectElement $objectElement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ObjectElement  $objectElement
     * @return \Illuminate\Http\Response
     */
    public function edit(ObjectElement $objectElement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateObjectElementRequest  $request
     * @param  \App\Models\ObjectElement  $objectElement
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateObjectElementRequest $request, ObjectElement $objectElement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ObjectElement  $objectElement
     * @return \Illuminate\Http\Response
     */
    public function destroy(ObjectElement $objectElement)
    {
        //
    }
}
