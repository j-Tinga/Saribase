<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;

class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $id = $request->input('requestID');

        if($id){
        
        $requestList = DB::table('request_list')
        ->join('item', 'request_list.itemID','item.itemID')
        ->where('request_list.requestID', $id)->get();
      
        return view('contents.requestlist')->with('reqList', $requestList);  
        }  

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
    public function destroy(Request $request)
    {
        //
        $req_id = $request->session()->forget('requestID');
        return redirect('products');
    }

}
