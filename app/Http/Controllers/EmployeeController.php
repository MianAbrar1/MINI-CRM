<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee; // Import the Employee model
use App\Models\Company; // Import the Company model
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Employee::select('id','first_name','last_name','email','company_name','phone')->get();
            return Datatables::of($data)->addIndexColumn()
                ->addColumn('action', function($row){
                    $btn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

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
