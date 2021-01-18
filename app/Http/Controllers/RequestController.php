<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;

class RequestController extends Controller
{
    
    public function store(Request $request)
    {
        //
        DB::table('request')->insert([
            [
                'branchID'      => $request->session()->get('branchID'),
                'requesterID'   => $request->session()->get('empID'),
                'paymentType' => $request->input('paymentType'),
                'requestStatus'      => 'Pending',
                
            ]
        ]);
        
        $lastID = DB::table('request')->orderBy('requestID', 'DESC')->first();
        Session::put('requestID', $lastID->requestID);
        return redirect('products');
    }

    public function show(Request $request)
    {
        $id = $request->input('requestID');
        Session::put('reqID', $id);
        return redirect('requests');    

    }

    public function destroy(Request $request)
    {
        //
        $req_id = $request->session()->forget('requestID');
        return redirect('products');
    }

}
