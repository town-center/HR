<?php

namespace App\Http\Controllers;


use App\Models\Basic;
use App\Models\Department;
use App\Models\FormType;
use App\Models\User;
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

    public function createAdminLeave()
    {

        $formTypes = FormType::all();
        return view("basic.createAdministrativeLeave", compact('formTypes'));

    }

    public function createHourlyLeave()
    {

        $formTypes = FormType::all();
        return view("basic.createHourlyLeave", compact('formTypes'));

    }

    public function permissionChange()
    {

        $formTypes = FormType::all();
        return view("basic.createPermissionChange", compact('formTypes'));

    }

    public function noticeDismissal()
    {
        $users = User::where('department_id',Auth::user()->department->id)->get();
        $formTypes = FormType::all();
        return view("basic.createNoticeDismissal", compact('formTypes','users'));

    }

    public function additionalAssignment()
    {
        $users = User::where('department_id',Auth::user()->department->id)->get();
        $formTypes = FormType::all();
        return view("basic.createAdditionalAssignment", compact('formTypes','users'));

    }

    public function workWithoutFingerprint()
    {
        $users = User::all();
        $departments = Department::all();
        $formTypes = FormType::all();
        return view("basic.createWorkWithoutFingerprint", compact('formTypes','users','departments'));

    }

    public function overtimeHours()
    {

        $formTypes = FormType::all();
        return view("basic.createOvertimehours", compact('formTypes'));

    }

    public function requestFinancialAdvance()
    {

        $formTypes = FormType::all();
        return view("basic.createRequestFinancialAdvance", compact('formTypes'));

    }

    public function transferRequest()
    {

        $formTypes = FormType::all();
        return view("basic.createTransferRequest", compact('formTypes'));

    }

    public function financialPunishment()
    {
        $users=User::all();
        $formTypes = FormType::all();
        return view("basic.createFinancialPunishment", compact('formTypes','users'));

    }

    public function externalTask()
    {
        $users=User::all();
        $formTypes = FormType::all();
        return view("basic.createExternalTask", compact('formTypes','users'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {



        $validator = Validator::make($request->all(), [
            'type_id' => 'required|integer',
            'duration_vacation' => ['string', 'max:255', 'nullable'],
            'start_vacation' => 'date|nullable',
            'end_vacation' => 'date|nullable',
            'notes' => 'string|nullable',

            'start_hour' => 'date_format:H:i|nullable',
            'end_hour' => 'date_format:H:i|nullable',
            'request_date' => 'date|nullable',
            'emp' => 'integer|nullable',

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
            'emp_id'=> $request->emp,

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

    public function stepChange(string $id)
    {
        $roles =User::where('id',Auth::id())->first();
        foreach ($roles->getRoleNames() as $role){
            $role;
            break;
        }

        if ($role == 'Manager'){
            Basic::where('id',$id)->update([
                'step'=> 2
            ]);
        }

        if ($role == "Admin"){
            Basic::where('id',$id)->update([
                'step'=> 3
            ]);
        }

        return redirect('/basic')
            ->with('Accepted', 'Basic request accepted');
    }
}
