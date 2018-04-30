<?php

namespace App\Http\Controllers;

use App\Branch;
use App\Company;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function index()
    {
        $branches = Branch::with('companies')->get();

        return view('pages.branches.manageBranch',array(
            'branches' => $branches
        ));
    }

    public function create()
    {
        $companies = Company::all();

        return view('pages.branches.createBranch',array(
            'companies' => $companies
        ));
    }

    public function store(Request $request)
    {
        $request->validate([
            'company_id' => 'required',
            'branch_name' => 'required',
            'location' => 'required'
        ]);

        $branch = new Branch;
        $branch->company_id = $request->company_id;
        $branch->branch_name = $request->branch_name;
        $branch->location = $request->location;

        $branch->save();

        return redirect('branch')->with('message','Successfully Created Branch');
    }

    public function edit($id)
    {
        $companies = Company::pluck('company_name','id');
        //dd($companies);
        $branch = Branch::findOrFail($id);

        return view('pages.branches.editBranch',array(
            'companies' => $companies,
            'branch' => $branch
        ));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'company_id' => 'required',
            'branch_name' => 'required',
            'location' => 'required'
        ]);

        $branch = Branch::findOrFail($id);
        $branch->company_id = $request->company_id;
        $branch->branch_name = $request->branch_name;
        $branch->location = $request->location;

        $branch->save();

        return redirect('branch')->with('message','Successfully Updated Branch');
    }

    public function destroy($id)
    {
        $branch = Branch::find($id);

        $branch->delete();

        return redirect('branch')->with('message','Successfully Deleted Branch');
    }

}
