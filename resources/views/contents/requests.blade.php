@extends('layout.layout')

@section('requests')
    bg-gray-500
@endsection

@section('content')


@if ($requests->count())
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
                                    Request ID
                             </th>
                             <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Employee Name
                             </th>
                             <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Branch Name
                             </th>
                             <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Date Requested
                             </th>
                             <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                   Payment Type
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                   Status
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Action
                            </th>
                          </tr>   
                    </thead> 
                    <tbody class="bg-white divide-y divide-gray-200">    
                        @foreach($requests as $b)    
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900">{{$b->requestID}}</div>
               
                                           </td>
                                           <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900">{{$b->firstName}}</div>
               
                                           </td>
                                           <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900">{{$b->branchName}}</div>
               
                                           </td>
                                           <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900">{{$b->dateRequested}}</div>
                                           
                                           </td>
                                           <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900">{{$b->paymentType}}</div>
                                           </td>
                                           <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900">{{$b->requestStatus}}</div>
                                           </td>
                                           <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                <form action="cancelItem" method= "POST">
                                                    @csrf
                                                    @method('delete')
                                                    <input type="hidden" name="reqID" value = {{$b->requestID}}>
                                                    <button class="mr-6 bg-blue-500 text-white px-4 py-3 w-40 rounded-sm text-sm hover:bg-blue-300 ">Cancel</button>
                                                </form>
                                                <form action="/showReqList" method= "GET">
                                                    @csrf
                                                    <input type="hidden" name="requestID" value = {{$b->requestID}}>
                                                    <button onclick="toggleModal('item')" class="mr-6 bg-blue-500 text-white px-4 py-3 w-40 rounded-sm text-sm hover:bg-blue-300 "> Show Request List</button>
                                                </form>
                                            
                                           </td>
                                        
                                        </tr>                   
                        @endforeach
                    </tbody>
                 </table>
                 
                 <!--Request List Modal-->

                <div class=" hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="item">
                    <div class="w-3/12 relative w-auto my-6 mx-auto max-w-3xl">
                    <!--content-->
                    <div class=" border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                        <!--header-->
                        <div class="flex items-start justify-between p-5 border-b border-solid border-gray-500 rounded-t">
                        <h3 class="text-3xl font-semibold">
                            Request List
                        </h3>
                        <button class="p-1 ml-auto border-0 text-black float-right text-3xl leading-none font-semibold outline-none" onclick="toggleModal('requestList')">
                            ×
                        </button>
                        </div>
                        <!--body-->
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
                                    
                                        </tr>   
                                </thead> 
                                <tbody class="bg-white divide-y divide-gray-200"> 
                                @if(Session::get('reqID'))
                                @foreach($reqList as $key => $item)
                                    
                                    <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">{{$item->itemID}}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{$item->itemName}}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{$item->quantityRequested}}</td>
                                    </tr>
                                 @endforeach
                                @endif
                                </tbody>
                            </table>
                          </div>
                        
                        
                        </div>
                        <!--footer-->
                        
                         </div>
                      </div>
                  </div>

                </div>
              </div>  
            </div>
    </div>
</div>

<script type="text/javascript">
  function toggleModal(modalID){
    document.getElementById(modalID).classList.toggle("hidden");
    document.getElementById("backdrop").classList.toggle("hidden");
    document.getElementById(modalID).classList.toggle("flex");
    document.getElementById("backdrop").classList.toggle("flex");
  }
</script>

@else 
<div class="flex justify-center">
    <div>
        <h1>No Requests</h1>
    </div>
@endif


@endsection

