<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Auth\Events\Validated;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = Company::all();
        return view('company.index')->with('companies', $companies);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('company.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required',
            'nip' => 'required'
        ]);

        $company = new Company();
        $company -> name = $validated['name'];
        $company -> address = $validated['address'];
        $company -> nip = $validated['nip'];
        $company -> save();

        //Session::flash('success', 'Dodano nową firmę!');

        return redirect(route('company.index'));

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
        return view('company.edit')->with('company', $company);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Company $company)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required',
            'nip' => 'required'
        ]);

        $company -> name = $validated['name'];
        $company -> address = $validated['address'];
        $company -> nip = $validated['nip'];
        $company -> save();

        //Session::flash('success', 'Zmieniono firmę!');

        return redirect(route('company.index'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        $company->delete();

        //Session::flash('success', 'Usunięto poprawnie');

        return redirect(route('company.index'));
    }
}
