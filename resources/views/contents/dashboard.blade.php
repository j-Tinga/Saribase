@extends('layout.layout')

@section('dashboard')
    bg-gray-500
@endsection

@section('content')
<div class="flex h-3/5 m-2 ">
    <div class="bg-white mx-2 p-4 rounded-sm shadow-sm w-full">
        <div class="uppercase p-2 mb-4 text-xl">
            <h1>item status</h1>
        </div>
        <div class="flex justify-between">
            <!--TABLE 1-->
            <div class=" w-1/2 mx-12 flex items-center flex-col">
                <div class="-my-2 w-full overflow-x-auto sm:-mx-6 lg:-mx-8">
                  <div class="w-full py-2 align-middle inline-block sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-md">
                        <div class="w-full flex items-center mr-4 p-2 bg-gray-50">
                            <h1 class="ml-2 text-md font-semibold uppercase">branch 1</h1>
                        </div>
                      <table class="text-center items-center min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                              <tr>
                                 <th scope="col" class="text-center px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Item ID
                                 </th>
                                 <th scope="col" class="text-center px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Item Name
                                 </th>
                                
                                <th scope="col" class="text-center px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Stock
                                </th>
                               
                              </tr>   
                        </thead> 
                        <tbody class="bg-white divide-y divide-gray-200">    
                           <tr>
                               <td class="px-7 py-4 whitespace-nowrap">
                                       <div class="text-sm text-gray-900">Test1</div>
   
                               </td>
                               <td class="px-6 py-4 whitespace-nowrap">
                                       <div class="text-sm text-gray-900">Tes2</div>
                               
                               </td>
                               <td class="px-6 py-4 whitespace-nowrap">
                                   <div class="text-sm text-gray-900">Test3</div>
                               </td>
                              
                           </tr>
                        </tbody>
                     </table>
                     
                    </div>
                  </div>  
                </div>
            </div>
             <!--TABLE 2-->
             <div class=" w-1/2 mx-12 flex items-center flex-col">
                 <div class="-my-2 w-full overflow-x-auto sm:-mx-6 lg:-mx-8">
                   <div class="w-full py-2 align-middle inline-block sm:px-6 lg:px-8">
                     <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-md">
                         <div class="w-full flex items-center mr-4 p-2 bg-gray-50">
                             <h1 class="ml-2 text-md font-semibold uppercase">branch 2</h1>
                         </div>
                       <table class="text-center items-center min-w-full divide-y divide-gray-200">
                         <thead class="bg-gray-50">
                               <tr>
                                  <th scope="col" class="text-center px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                         Item ID
                                  </th>
                                  <th scope="col" class="text-center px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                         Item Name
                                  </th>
                                 
                                 <th scope="col" class="text-center px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                         Stock
                                 </th>
                                
                               </tr>   
                         </thead> 
                         <tbody class="bg-white divide-y divide-gray-200">    
                            <tr>
                                <td class="px-7 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">Test1</div>
    
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">Tes2</div>
                                
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">Test3</div>
                                </td>
                               
                            </tr>
                         </tbody>
                      </table>
                      
                     </div>
                   </div>  
                 </div>
             </div>    
                
                 
                 
                
             
         
         </div>
    </div>
    
    
</div>

<div class="flex h-1/3 m-2">
    
    <div class="bg-white m-2 p-4 rounded-sm shadow-sm w-full">
           
        <div class="text-xl">
            BRANCHES Overview
        </div>
        <div class="divide-x m-4 grid grid-cols-3 gap-4 p-8 justify-center">
                             
            @foreach ($branches as $branch)
                
                        <div class=" text-center">
                                <h1 class=" mb-5 text-xl font-bold "> {{$branch->branchName}} </h1>
                                <h1 class="mb-2 text-l ">{{$branch->branchAddress}} </h1>
                                <h1 class=" mb-2 text-l"> {{$branch->branchContact}} </h1>   
                        </div>
        
            @endforeach
            
        </div>
    </div>
</div>


   
@endsection