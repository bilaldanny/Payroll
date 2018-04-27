<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;
use Auth;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::all();

        return view('pages.companies.manageCompany',array(
            'companies' => $companies
        ));
    }
    public function create()
    {
        return view('pages.companies.createCompany');
    }

    public function store(Request $request)
    {
        $request->validate([
            'company_name' => 'required',
            'location' => 'required'
        ]);

        $company = new Company;
        $company->user_id = Auth::user()->id;
        $company->company_name = $request->company_name;
        $company->location = $request->location;

        $company->save();

        return redirect('company')->with('message','Successfully Created Company');
    }

    public function edit($id)
    {
        $company = Company::findOrFail($id);

        return view('pages.companies.editCompany',array(
            'company' => $company
        ));

    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'company_name' => 'required',
            'location' => 'required'
        ]);
        $company = Company::findOrFail($id);

        $company->company_name = $request->company_name;
        $company->location = $request->location;

        $company->save();

        return redirect('company')->with('message','Successfully Edited Company');
    }
}
