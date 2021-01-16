<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Models\Employee;

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
        $branchID = DB::table('branch')->get('branchID');
        $employees = Employee::all();
        
        return view('contents.admin', ['branches'=>$branchID], ['employees'=>$employees]);
    }
    public function requestForm()
    {
        return view('contents.requestForm');
    }
}
