@extends('layout.layout')

@section('requests')
    bg-gray-500
@endsection

@section('content')


@if ($reqList->count())
<div class="flex justify-center">
    <div class="w-9/12 flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
              <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                
                  <div class="mb-6 flex justify-between">
                    <div class="flex items-center  mr-4">
                        <h1 class="text-2xl font-semibold uppercase">Requests</h1>
                    </div>
                    
                    
                  </div>
                

                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-md">
                    
                  <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                          <tr>
                             <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Item ID
                             </th>
                             <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Item Name
                             </th>
                             <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Quantity
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Action
                            </th>
                          </tr>   
                    </thead> 
                    <tbody class="bg-white divide-y divide-gray-200">    
                        @foreach($reqList as $b)    
                                        <tr>
                                           <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900">{{$b->itemID}}</div>
               
                                           </td>
                                           <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900">{{$b->itemName}}</div>
                                           
                                           </td>
                                           <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900">{{$b->quantityRequested}}</div>
                                           </td>
                                           <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                <form action="cancelItem" method= "POST">
                                                    @csrf
                                                    @method('delete')
                                                    <input type="hidden" name="itemID" value = {{$b->itemID}}>
                                                    <button class="mr-6 bg-blue-500 text-white px-4 py-3 w-40 rounded-sm text-sm hover:bg-blue-300 ">Cancel</button>
                                                </form>
                                            
                                           </td>
                                        
                                        </tr>                   
                        @endforeach
                    </tbody>
                 </table>
                 
                </div>
              </div>  
            </div>
    </div>
</div>
@else 
<div class="flex justify-center">
    <div>
        <h1>No Requests</h1>
    </div>
@endif
<!--

    <div align= "center"id= "loginform" class = "jumbotron" >
            <h1>This is the Request List</h1>
            <table>
                <thead>
                     <tr>
                        <th> Item ID </th>
                        <th> Item Name </th>
                        <th> Quantity </th>
                        <th> Action </th>
                    </tr>
                </thead>
                <tbody>
                @foreach($reqList as $b)
                    @if($b->requestID == Session::get('requestID'))
                    <tr>
                        <td>{{$b->itemID}}</td>
                        <td>{{$b->itemName}}</td>
                        <center><td>{{$b->quantityRequested}}</td></center>
                        <td>
                        <form action="cancelItem" method= "POST">
                            @csrf
                            @method('delete')
                            <input type="hidden" name="itemID" value = {{$b->itemID}}>
                            <button  class= "btn btn-primary">Cancel</button>
                        </form>
                        </td>
                    </tr> 
                    @endif  
                @endforeach
                </tbody>
            </table>
     
            <button onclick="window.location='{{ url('/products') }}'"  class= "btn btn-primary"> Return to Products page </button>
        </div> -->
   
@endsection