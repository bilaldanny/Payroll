<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;

class DepartmentController extends Controller
{
	public function index()
	{
	    $departments = Department::all();

	    return view('pages.departments.manageDepartment',array(
	        'departments' => $departments
	    ));
	}

	public function create()
	{
	    return view('pages.departments.createDepartment');
	}

	public function store(Request $request)
	{
	    $request->validate([
	        'department_name' => 'required',
	    ]);

	    $department = new Department;
	    $department->department_name = $request->department_name;

	    $department->save();

	    return redirect('department')->with('message','Successfully Created department');
	}

	public function edit($id)
	{
	    $department = Department::findOrFail($id);

	    return view('pages.departments.editDepartment',array(
	        'department' => $department
	    ));

	}

	public function update(Request $request, $id)
	{
	    $request->validate([
	        'department_name' => 'required',
	    ]);
	    
	    $department = Department::findOrFail($id);

	    $department->department_name = $request->department_name;

	    $department->save();

	    return redirect('department')->with('message','Successfully Edited Department');
	}

	public function destroy($id)
	{
	    $department = Department::find($id);

	    $department->delete();

	    return redirect('department')->with('message','Successfully Deleted Department');
	}
}
