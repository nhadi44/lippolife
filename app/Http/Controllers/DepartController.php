<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartController extends Controller
{
    // CRUD Department
    public function create(Request $request)
    {
        $request->validate([
            'code' => 'required',
            'name' => 'required',
        ]);

        // ddd($request->all());
        $data = Department::create([
            'code' => $request['code'],
            'name' => $request['name'],
            'description' => $request->description
        ]);

        return redirect('/management')->with('success', 'Created Department Success!');
    }

    public function edit($id)
    {
        $departEdit = Department::findorfail($id);
        // echo "hello";
        return view('pages.admin.management.v_update-depart', compact('departEdit'));
    }
    // public function

    public function update(Request $request, $id)
    {
        $update = Department::findorfail($id);
        $update->update([
            'code' => $request['code'],
            'name' => $request['name'],
            'description' => $request->description,
            'created_at' => $request->created_at
        ]);
        return redirect('/management')->with('success', 'Update Department Success!');
    }

    public function destroy($id)
    {
        $depart = Department::findorfail($id);
        $depart->delete();
        return back()->with('info', 'Delete Department Success!');
    }
}
