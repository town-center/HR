<?php

namespace App\Http\Controllers;
use App\Models\Advanced;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class AdvancedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $advanceds = Advanced::All();
        return view("advanced.index",compact('advanceds'));
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
        $validator = Validator::make($request->all(), [
            'advanced_name' => ['required', 'string', 'max:255'],
        ]);
        if($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

         Advanced::create([
            'name' => $request->advanced_name,
        ]);
        session()->flash('Add', 'Advanced has been added successfully ');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $advanced= Advanced::find($id);
        return view("advanced.show",compact('advanced'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $advanced = Advanced::find($id);
        return view("advanced.edit", compact('advanced'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $advanced = Advanced::findOrFail($id);
        $advanced->update([
            'name' => $request->advanced_name,
    ]);
        session()->flash('Update', 'Advanced has been updated successfully ');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Advanced::find($id)->delete();

        return redirect('/advanced')
            ->with('delete','Advanced deleted successfully');
    }
}
