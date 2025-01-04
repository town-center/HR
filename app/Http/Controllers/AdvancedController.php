<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdvancedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("advanced.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("advanced.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return "store";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view("advanced.show");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view("basic.edit");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "update";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "destroy";
    }
}
