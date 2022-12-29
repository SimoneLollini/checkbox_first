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
        return view('admin.object_element.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreObjectElementRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreObjectElementRequest $request)
    {
        $data = $request->all();
        $newObjectEl = new ObjectElement();
        $newObjectEl->title = $data['title'];
        $newObjectEl->customer = $data['customer'];
        $newObjectEl->status = false;
        $newObjectEl->save();
        return to_route('object_element.index');
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
        return view('admin.object_element.edit', compact('objectElement'));
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
        $data = $request->all();

        if (array_key_exists("status", $data) and $data['status'] = 1) {
            $data['status'] = true;
        } else {
            $data['status'] = false;
        }

        $objectElement->update($data);
        return to_route('object_element.index');
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
