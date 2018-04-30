<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Company;
use App\Branch;
use App\Location;
use App\Department;

class EmployeeController extends Controller
{

    public function index()
    {
        $employees = Employee::with('companies')->get();

        return view('pages.employees.manageEmployee',array(
            'employees' => $employees
        ));
    }

    public function create()
    {
        $companies = Company::all();
        $branches = Branch::all();
        $locations = Location::all();
        $departments = Department::all();

        return view('pages.employees.createemployee',array(
            'companies' => $companies,
            'branches' => $branches,
            'locations' => $locations,
            'departments' => $departments,
        ));
    }

    public function store(Request $request)
    {
        $request->validate([
            'company_id' => 'required',
            'branch_id' => 'required',
            'location_id' => 'required',
            'department_id' => 'required',
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'dob' => 'required',
            'hiring_date' => 'required',
            'leaving_date' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'status' => 'required',
        ]);

        $employee = new Employee;
        $employee->company_id = $request->company_id;
        $employee->branch_id = $request->branch_id;
        $employee->location_id = $request->location_id;
        $employee->department_id = $request->department_id;
        $employee->first_name = $request->first_name;
        $employee->middle_name = $request->middle_name;
        $employee->last_name = $request->last_name;
        $employee->dob = $request->dob;
        $employee->hiring_date = $request->hiring_date;
        $employee->leaving_date = $request->leaving_date;
        $employee->phone = $request->phone;
        $employee->address = $request->address;
        $employee->status = $request->status;
        $employee->created_by = $request->created_by;
        $employee->updated_by = $request->updated_by;

        $employee->save();

        return redirect('employee')->with('message','Successfully Created Employee');
    }

    public function edit($id)
    {
        $companies = Company::pluck('company_name','id');
        $branches = Branch::pluck('branch_name','id');
        $locations = Location::pluck('location_name','id');
        $departments = Department::pluck('department_name','id');
        //dd($companies);

        $employee = Employee::findOrFail($id);

        return view('pages.employees.editemployee',array(
            'companies' => $companies,
            'branches' => $branches,
            'locations' => $locations,
            'departments' => $departments,
            'employee' => $employee
        ));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'company_id' => 'required',
            'branch_id' => 'required',
            'location_id' => 'required',
            'department_id' => 'required',
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'dob' => 'required',
            'hiring_date' => 'required',
            'leaving_date' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'status' => 'required',
        ]);

        $employee = new Employee;
        $employee->company_id = $request->company_id;
        $employee->branch_id = $request->branch_id;
        $employee->location_id = $request->location_id;
        $employee->department_id = $request->department_id;
        $employee->first_name = $request->first_name;
        $employee->middle_name = $request->middle_name;
        $employee->last_name = $request->last_name;
        $employee->dob = $request->dob;
        $employee->hiring_date = $request->hiring_date;
        $employee->leaving_date = $request->leaving_date;
        $employee->phone = $request->phone;
        $employee->address = $request->address;
        $employee->status = $request->status;
        $employee->created_by = $request->created_by;
        $employee->updated_by = $request->updated_by;

        $employee->save();

        return redirect('employee')->with('message','Successfully Updated Employee');
    }

    public function destroy($id)
    {
        $employee = Employee::find($id);

        $employee->delete();

        return redirect('employee')->with('message','Successfully Deleted Employee');
    }

}
