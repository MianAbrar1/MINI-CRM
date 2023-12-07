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
                $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editProduct">Edit</a>';
                $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteProduct">Delete</a>';
                 return $btn;
         })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('employee');
    }
    public function store(Request $request)
    {

        Employee::updateOrCreate([
            'id' => $request->employee_id
        ],
        [
            'name' => $request->name,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'company_name' => $request->company_name,
            'email' => $request->email,
            'phone' => $request->phone
        ]);

return response()->json(['success'=>'Employee saved successfully.']);
       }

       public function edit($id)
    {
        $employee = Employee::find($id);
        return response()->json($employee);
    }

    public function destroy($id)
    {
        Employee::find($id)->delete();

        return response()->json(['success'=>'Employee deleted successfully.']);
    }
    }
