<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee; // Import the Employee model
use App\Models\Company; // Import the Company model
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function create()
{
    {
        $Com = Company::all(); // Fetch companies from your database

        return view('employees.create', ['companies' => $Com]);
    }
}
public function index()
{
    $employees = Employee::paginate(10); // Fetch all employees
    return view('employees.index', compact('employees'));
}
    public function store(Request $request)
{
    //dd($request->all());
    $request->validate([
        'first_name' => 'required',
        'last_name' => 'required',
        'company' => 'nullable', // Ensure company_id exists in companies table
        'email' => 'nullable|email',
        'phone' => 'required',
    ]);

    // Creating and storing the employee record
    $employee = new Employee();
    $employee->first_name = $request->input('first_name');
    $employee->last_name = $request->input('last_name');
    $employee->company = $request->input('company_id'); // Assuming this is the foreign key field
    $employee->email = $request->input('email');
    $employee->phone = $request->input('phone');
    // Additional fields assignment if needed
    $employee->save();
    return redirect('/employees');



    // Redirect or return a response

}
public function destroy(string $id)
    {
        $delete=Employee::find($id);
        $delete->delete();
        return redirect('/employees');

    }
    public function edit(string $id)
    {
        $companies = Company::all(); // Fetch companies from your database
         $emp = Employee::find($id);
        //print($companies);
      return view('employees.edit', compact('companies','emp'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $employee = Employee::find($id);
    $employee->first_name = $request->input('first_name');
    $employee->last_name = $request->input('last_name');
    $employee->company = $request->input('company_id'); // Assuming this is the foreign key field
    $employee->email = $request->input('email');
    $employee->phone = $request->input('phone');
    // Additional fields assignment if needed
    $employee->update();
    return redirect('/employees');

    }
    function search_data(Request $request){
       // $data = $request->input('search');
        //$employees = DB::table('employees')->where('first_name','like','%'.$data.'%')
        //->orWhere('last_name','like','%'.$data.'%')->orWhere('email','like','%'.$data.'%')->get();
        //return view('/employees', ['employee'=>$employees]);
        //print($employees);
        $query = $request->input('query');
        $employees = DB::table('employees')
            ->where('first_name', 'LIKE', '%' . $query . '%')
            ->get();

            return view('employees.index', compact('employees'));

    }
}
