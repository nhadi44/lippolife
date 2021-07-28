<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Department;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'position' => 'required',
        ]);
        if ($request->get('deptCode')) {
            $cd = $request->deptCode;
        }
        $code = Helper::IDGenerator(new Employee, 'code', 4, substr($cd, 0, 2));
        $create = Employee::create([
            'code' => $code,
            'name' => $request['name'],
            'position' => $request['position'],
            'deptCode' => $request->deptCode
        ]);
        // ddd($request->all(), $code);
        return redirect('/management')->with('success', 'Created Employee Success!');
        // $employee = Employee::create([]);
    }

    public function edit($id)
    {
        $employee = Employee::findorfail($id);
        $depart = Department::all();
        return view('pages.admin.management.v_update-employee', compact('employee', 'depart'));
    }

    public function updates(Request $req, $id)
    {
        $employee = Employee::findorfail($id);
        // ddd($req->all(), $employee);
        $employee->update([
            'code' => $req['code'],
            'name' => $req['name'],
            'position' => $req['position'],
            'deptCode' => $req->deptCode,
            'created_at' => $req->created_at
        ]);
        return redirect('/management')->with('success', 'Updated Employee Success!');
    }

    public function destroy($id)
    {
        $employee = Employee::findorfail($id);
        $employee->delete();
        return redirect('/management')->with('info', 'Deleted Employee Success!');
    }
}
