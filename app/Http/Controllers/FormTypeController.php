<?php

namespace App\Http\Controllers;
use App\Models\FormType;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class FormTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $formTypes = FormType::all();
        return view("form-type.index",compact('formTypes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("form-type.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'formType_name' => ['required', 'string', 'max:255'],
        ]);
        if($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        FormType::create([
            'name' => $request->formType_name,
        ]);
        session()->flash('Add', 'Form Type ' . $request->formType_name .' has been added successfully ');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $formType = FormType::find($id);
        return view("form-type.show",compact('formType'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $formType =  FormType::find($id);
        return view("form-type.edit",compact('formType'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $formType = FormType::findOrFail($id);
        $formType->update([
            'name' => $request->formType_name,
    ]);
        session()->flash('Update', 'Form Type has been updated successfully ');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        FormType::find($id)->delete();

        return redirect('/form-type')
            ->with('delete','Form Type deleted successfully');
    }
}
