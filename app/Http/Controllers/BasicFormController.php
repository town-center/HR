<?php

namespace App\Http\Controllers;

use App\Models\Basic;
use App\Models\FormType;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class BasicFormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $basics = Basic::all();

        return view("basic.index", compact('basics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $formTypes = FormType::all();
        return view("basic.create", compact('formTypes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'basic_name' => ['required', 'string', 'max:255'],
            'formType' => ['required'],
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        Basic::create([
            'user_id' => Auth::id(),
            'type_id'=>$request->formType,
        ]);

        session()->flash('Add', 'Basic has been added successfully ');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $basic = Basic::find($id);
        return view("basic.show", compact('basic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $basic = Basic::find($id);
        return view("basic.edit", compact('basic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $basic = Basic::findOrFail($id);
        $basic->update([
            'name' => $request->basic_name,
        ]);
        session()->flash('Update', 'Basic has been updated successfully ');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Basic::find($id)->delete();

        return redirect('/basic')
            ->with('delete', 'Basic deleted successfully');
    }
}
