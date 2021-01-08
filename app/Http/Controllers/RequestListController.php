<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;

class RequestListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('request_list');
    }

    public function action(Request $request){

        if($request->ajax()){
            $output = '';

            $items = DB::table('item')->where('itemName', 'LIKE', '%'.$request->search. '%')->get();

            if($items){
                foreach($items as $key => $item){
                    $output .='<tr>'.
                    '<td>'.$item->itemID.'</td>'.
                    '<td>'.$item->itemName.'</td>'.
                    '<td> 
                        <form action="/addToList" method = "GET">
                            <input type = "hidden" name = "itemID" value= '.$item->itemID.'>
                             Quantity <input type = "number" name = "quantity" class="number" min= 0 max= 50>
                                <button name = "addItem" class= "btn btn-primary Add" > Add </button>
                        </form></td>'.
                    '</tr>';
                }
                
                return Response($output);
            }
            // return view('showList')->with()
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

        $insert =DB::table('request_list')->insert([
            [
                'requestID'      => $request->session()->get('requestID'),
                'itemID'   => $request->input('itemID'),
                'quantityRequested' => $request->input('quantity')
                
            ]
        ]);
            if($insert){
                echo $request->input('itemID');
                return redirect('request_list');
            }
            else{
                return redirect('loginform');
            }
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
        $id = $request->session()->get('requestID');
        $getList = DB::table('request_list')->join('item', 'request_list.itemID', '=', 'item.itemID')->select('request_list.*', 'item.itemName')->get();


        if($getList){
            return view('displayList')->with('reqList', $getList);
        }
        else{
            return view('request_list');
            echo ' no result';
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
    public function destroy($id)
    {
        //
    }
}
