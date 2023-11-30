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
    public function index()
    {
         // Fetch all employees
        return view('employee');
    }
    public function addEmployee(Request $request)
    {
        $employee = new Employee();
    $employee->first_name = $request->input('first_name');
    $employee->last_name = $request->input('last_name');
    $employee->company_name = $request->input('company_name');
    $employee->email = $request->input('email');
    $employee->phone = $request->input('phone');
    $employee->save();

    return response()->json(['res'=>'Employee added Successfully']);
       }
}
