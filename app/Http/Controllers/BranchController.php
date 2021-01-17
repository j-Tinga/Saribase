<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function store(Request $request){
        
         
        
        $this->validate($request, [
            'bname' =>'required|max:255',
            'address' =>'required|max:255',
            'bmanager' =>'required',
            'btype' =>'required',
            'contact' =>'required|max:255',
        ]);
         
        DB::table('branch')->insert([
            'branchName'=> $request->bname,
            'branchAddress'=> $request->address,
            'branchManagerID'=> $request->bmanager,
            'branchType'=>$request->btype,
            'branchContact'=>$request->contact,
        ]);
            
       

        return redirect('admin');
    }
}
