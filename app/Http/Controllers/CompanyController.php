<?php

namespace App\Http\Controllers;

use App\Http\Controllers\companycontroller as ControllersCompanycontroller;
use App\Models\Company;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Company::select('id','name','email','website','logo')->get();
            return Datatables::of($data)->addIndexColumn()
                ->addColumn('action', function($row){
                    $btn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('company');
    }

    public function addCompany(Request $request)
    {
        $file = $request->file('file');
        $filename = time().''.$file->getClientOriginalName();
        $filePath = $file->storeAs('image',$filename,'public');

        $Company = new Company();
        $Company->name = $request->input('name');
        $Company->email = $request->input('email');
        $Company->website = $request->input('website');
        $Company->logo = $filePath;
        $Company->save();

        return response()->json(['res'=>'Company Created Successfully']);
    }

}
