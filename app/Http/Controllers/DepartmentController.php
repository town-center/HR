<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departments = Department::all();
        return view("department.index",compact("departments"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("department.create");

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'department_name' => 'required|string|max:255'
        ]);

        if ($validator->fails()) {
            return " error ";
        }

        Department::create([
            'name' => $request->department_name,
            'Created_by' => (Auth::user()->name),

        ]);
        session()->flash('Add', 'Department has been added successfully ');
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $department = Department::find($id);

        return view("department.show",compact('department'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $department = Department::find($id);
        return view("department.edit",compact("department"));


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $depatment = Department::findOrFail($id);
        $depatment->update([
            'name' => $request->department_name,
    ]);
        session()->flash('Update', 'Department has been updated successfully ');
        return redirect()->back();


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Department::find($id)->delete();

        return redirect('/department')
            ->with('delete','Department deleted successfully');

    }

    public function test()
    {
        //return "test";
       $user = Department::find(2)->users;
       return $user;
    }
}
