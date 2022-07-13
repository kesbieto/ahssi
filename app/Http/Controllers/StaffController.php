<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Statamic\Facades\GlobalSet;

use App\Models\User;

class StaffController extends Controller
{
    public function staff() {
        $staff = 'staff';
        $data = User::where('userType', 'like', '%'.$staff.'%')->get();
        return view('admin.staff.list')->with('data', $data);
    }

    public function create() {
        return view('auth.register');
    }
}
