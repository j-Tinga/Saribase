<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        
    }
    public function valid(Request $request)
    {
        //
        $empID = $request->input('empID');
        $pass = $request->input('password');

        $validate = DB::table('employee')->select('employeeID', 'password')->where('employeeID', $empID)->where('password',$pass)->first();

            if($validate){
                $queryLevel = DB::table('employee')->select('employeeLevelID', 'branchID')->where('employeeID', $empID)->first();

                $queryLName =  DB::table('employee_level')->select('levelName')->where('employeeLevelID',  $queryLevel->employeeLevelID)->first();

               

                    
                    Session::put('empID', $empID);
                    Session::put('empLevelID', $queryLevel->employeeLevelID);
                    Session::put('branchID', $queryLevel->branchID);
                    Session::put('levelName',  $queryLName->levelName);
                    return redirect()->route('dashboard');
               
                   
                       
           }else{
            return back()->with('status','Account Does Not Exist');
           }
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function logout(){
        Session::flush();
        return redirect('login');
    }
}
