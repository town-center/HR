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
          //  return $request;


        $validator = Validator::make($request->all(), [
            'type_id' => 'required|integer',
            'duration_vacation' => ['string', 'max:255', 'nullable'],
            'start_vacation' => 'date|nullable',
            'end_vacation' => 'date|nullable',
            'notes' => 'string|nullable',

            'start_hour' => 'date_format:H:i|nullable',
            'end_hour' => 'date_format:H:i|nullable',
            'request_date' => 'date|nullable',
            'start_work' => 'date|nullable',
            'financial_compensation' => 'numeric|nullable',
            'job_title' => 'string|nullable',
            'additional_hours' => 'integer|nullable',
            'extra_work_reason' => 'string|nullable',

            'advance_value' => 'string|nullable',
            'discount_value' => 'string|nullable',
            'entry' => 'date_format:H:i|nullable',
            'exit' => 'date_format:H:i|nullable',


            'manager_accept' => 'string',
            'security_manager_accept' => 'string',
            'vice_chairman_accept' => 'string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        if ($request->manager_accept != 'true')
            $manager='0';
        else
            $manager='1';

        if ($request->vice_chairman_accept != 'true')
            $vice='0';
        else
            $vice='1';

        if ($request->security_manager_accept != 'true')
            $security='0';
        else
            $security='1';

        Basic::create([
            'user_id' => Auth::id(),
            'type_id' => $request->type_id,
            'department_id' => Auth::user()->department->id,
            'duration_vacation' => $request->duration_vacation,
            'start_vacation' => $request->start_vacation,
            'end_vacation' => $request->end_vacation,
            'notes' => $request->notes,

            'start_hour' => $request->start_hour,
            'end_hour' => $request->end_hour,
            'request_date' => $request->request_date,
            'start_work' => $request->start_work,
            'financial_compensation' => $request->financial_compensation,
            'job_title' => $request->job_title,
            'additional_hours' => $request->additional_hours,
            'extra_work_reason' => $request->extra_work_reason,

            'advance_value' => $request->advance_value,
            'discount_value' => $request->discount_value,
            'entry' => $request->entry,
            'exit' => $request->exit,

            'vice_chairman_accept' => $vice,
            'manager_accept' => $manager,
            'security_manager_accept' => $security,


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
        $formTypes = FormType::all();
        $basic = Basic::find($id);
        return view("basic.edit", compact('basic','formTypes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       // return $request;

        $validator = Validator::make($request->all(), [
            'type_id' => 'required|integer',
            'duration_vacation' => ['string', 'max:255', 'nullable'],
            'start_vacation' => 'date|nullable',
            'end_vacation' => 'date|nullable',
            'notes' => 'string|nullable',

            'start_hour' => 'date_format:H:i|nullable',
            'end_hour' => 'date_format:H:i|nullable',
            'request_date' => 'date|nullable',
            'start_work' => 'date|nullable',
            'financial_compensation' => 'numeric|nullable',
            'job_title' => 'string|nullable',
            'additional_hours' => 'integer|nullable',
            'extra_work_reason' => 'string|nullable',

            'advance_value' => 'string|nullable',
            'discount_value' => 'string|nullable',
            'entry' => 'date_format:H:i|nullable',
            'exit' => 'date_format:H:i|nullable',


            'manager_accept' => 'string',
            'security_manager_accept' => 'string',
            'vice_chairman_accept' => 'string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        if ($request->manager_accept != 'true')
            $manager='0';
        else
            $manager='1';

        if ($request->vice_chairman_accept != 'true')
            $vice='0';
        else
            $vice='1';

        if ($request->security_manager_accept != 'true')
            $security='0';
        else
            $security='1';


        $basic = Basic::findOrFail($id);
        $basic->update([
            'user_id' => Auth::id(),
            'type_id' => $request->type_id,
            'department_id' => Auth::user()->department->id,
            'duration_vacation' => $request->duration_vacation,
            'start_vacation' => $request->start_vacation,
            'end_vacation' => $request->end_vacation,
            'notes' => $request->notes,

            'start_hour' => $request->start_hour,
            'end_hour' => $request->end_hour,
            'request_date' => $request->request_date,
            'start_work' => $request->start_work,
            'financial_compensation' => $request->financial_compensation,
            'job_title' => $request->job_title,
            'additional_hours' => $request->additional_hours,
            'extra_work_reason' => $request->extra_work_reason,

            'advance_value' => $request->advance_value,
            'discount_value' => $request->discount_value,
            'entry' => $request->entry,
            'exit' => $request->exit,

            'vice_chairman_accept' => $vice,
            'manager_accept' => $manager,
            'security_manager_accept' => $security,
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
