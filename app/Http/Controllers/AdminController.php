<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function report()
    {
        return view('pages.admin.v_report');
    }

    public function management()
    {
        $depart = Department::all();
        $employee = Employee::all();
        return view('pages.admin.v_management', compact('depart', 'employee'));
    }

    public function setting()
    {
        return view('pages.admin.v_user-management');
    }
}
