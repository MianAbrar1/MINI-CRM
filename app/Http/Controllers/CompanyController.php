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
        $com = Company::paginate(10);
       return view('Companies.index',['companies'=> $com]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Companies.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Creating and storing the Company record
        $Company = new Company();
        $Company->name = $request->input('name');
        $Company->email = $request->input('email');
        $Company->website = $request->input('website');
        // Additional fields assignment if needed
        $filename = time() . '.' . $request->logo->extension();
        $request->logo->move(public_path('images'), $filename);
        $Company->logo =$filename; // Assuming this is the foreign key field
        $Company->save();
        return redirect('/companies');



        // Redirect or return a response

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $companies = Company::all(); // Fetch companies from your database
         $com= Company::find($id);
        //print($companies);
      return view('companies.edit', compact('companies','com'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Company = Company::find($id);
        $Company->name = $request->input('name');
        $Company->email = $request->input('email');
        $Company->logo = $request->input('logo'); // Assuming this is the foreign key field
        $Company->website = $request->input('website');
        // Additional fields assignment if needed
        $Company->update();
        return redirect('/companies');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete=Company::find($id);
        $delete->delete();
        return redirect('/companies');

    }
}
