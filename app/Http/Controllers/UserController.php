<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view("user.index",compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::all();
        $departments=Department::all();
        return view("user.create",compact('roles','departments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'department' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'roles_name' => 'required'
        ]);
        if($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $user =  User::create([
            'name' => $request->name,
            'email' => $request->email,
            'department_id' => $request->department,
            'password' => Hash::make($request->password),
            'roles_name'=>json_encode([$request->roles_name]),
        ]);
        $user->assignRole($request->input('roles_name'));
        session()->flash('Add', 'User has been added successfully ');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);
        return view("user.show",compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id);
        $roles = Role::all();
        $departments=Department::all();
//        return $departments;
        return view("user.edit",compact('user','roles','departments'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {


        $user = User::findOrFail($id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'department_id'=>$request->department,
            'roles_name'=>json_encode([$request->roles_name]),
            'password' => Hash::make($request->password),

    ]);
        DB::table('model_has_roles')->where('model_id',$id)->delete();
        $user->assignRole($request->input('roles_name'));
        session()->flash('Update', 'User has been updated successfully ');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::find($id)->delete();

        return redirect('/user')
            ->with('delete','User deleted successfully');
    }

    public function test()
    {
        $dept = User::find(1)->department;
        return $dept;
    }
}
