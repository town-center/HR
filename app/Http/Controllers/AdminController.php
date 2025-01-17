<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        return "Admin Index";

    }

    public function AssignRole( $id) {

        // Assign role to user
         $user = User::find($id); // Example user with ID 1
         $user->assignRole('admin');
         return "done";

    }
}
