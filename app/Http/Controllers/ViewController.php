<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ViewController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function dashboard()
    {
        return view('contents.dashboard');
    }
    public function loginform()
    {
        return view('contents.login');
    }
    public function requests()
    {
        return view('contents.requests');
    }
    public function products()
    {
        return view('contents.products');
    }
    public function branches()
    {
        $branches = DB::table('branch')->get();
       
        return view('contents.branches',[
            'branches'=>$branches,
        ]);
    }
    public function admin(){
        $branch = DB::table('branch')
                    ->leftjoin('employee','branch.branchID','employee.branchID')
                    ->select('branch.branchID','branchName','branchAddress','firstName','lastName','branchType','branchContact')
                    ->orderBy('branchID', 'asc')
                    ->get();
        
        $employees = DB::table('employee')
                    ->join('employee_level','employee.employeeLevelID','=','employee_level.employeeLevelID')
                    ->join('branch','employee.branchID','=','branch.branchID')
                    ->select('employeeID','firstName','lastName','contactNumber','levelName','branchName')
                    ->orderBy('employeeID', 'asc')
                    ->get();

        $suppliers = DB::table('supplier')->get();
        $brands = DB::table('brand')->get();
        return view('contents.admin', [
                                        'branches'=>$branch, 
                                        'employees'=>$employees,
                                        'suppliers'=>$suppliers,
                                        'brands'=>$brands,
                                      ]);
    }
    public function requestForm()
    {
        return view('contents.requestForm');
    }
}
