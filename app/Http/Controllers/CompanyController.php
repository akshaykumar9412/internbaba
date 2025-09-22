<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $companies = Company::all();
        return view('admin.companies.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.companies.AddCompany');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // echo "Store function is called";
        $request->validate([
            'name' => 'required|string|max:255',
            // 'logo' => 'string|max:255',
            'website' => 'required|url',
            'email' => 'email|unique:companies',
            'phone' => 'required',
            'description' => 'required|min:10|max:500',


        ]);
        try {
            Company::create([
                'name' => $request->name,
                // 'logo' => $request->logo,
                'website' => $request->website,
                'email' => $request->email,
                'phone' => $request->phone,
                'description' => $request->description,


            ]);

            return redirect()->route('companies.index')
                ->with('success', 'Comapny created successfully.');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()])->withInput();
        }
        // dd($request->errors());
    }


    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        //

        return view('admin.companies.update', compact('company'));
    }

    /** 
     * Update the specified resource in storage.
     */
    public function update(Request $request, Company $company)
    {
        //
        // dd("Update function is called");
        // dd($request->all());
        $request->validate([
            'name' => 'required|string|max:255',
            'website' => 'required|url',
            'email' => 'required|email|',
            'phone' => 'required',
            'description' => 'required|min:10|max:500',
        ]);
        try {
            $company->update([
                'name' => $request->name,
                'website' => $request->website,
                'email' => $request->email,
                'phone' => $request->phone,
                'description' => $request->description,

            ]);

            return redirect()->route('companies.index')
                ->with('success', 'Comapny update successfully.');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()])->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        //
        $company->delete();
        return redirect()->route('companies.index')
            ->with('success', 'Company deleted successfully.');
    }
}
