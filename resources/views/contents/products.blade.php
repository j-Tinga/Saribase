@extends('layout.layout')

@section('products')
    bg-gray-500
@endsection

@section('content')


<div class="p-6 flex justify-center">
    <div class="w-9/12 flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
              <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                
                  <div class="mb-6 flex justify-between">
                    <div class="flex items-center  mr-4">
                        <h1 class="text-2xl font-semibold uppercase">Products Inventory</h1>
                    </div>
                    
                    <input type="text" id="search" name ="search" placeholder = "Search" class="w-2/6 m-0 rounded-md ">
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
                                Tags
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Tags
                            </th>
                             <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Tags
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Stock
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Action
                            </th>
                          </tr>   
                    </thead> 
                    <tbody class="bg-white divide-y divide-gray-200">    
                    
                    </tbody>
                 </table>
                 <div class="px-6 py-4 whitespace-nowrap bg-white text-gray-900 text-md font-semibold flex items-center"> 
                    @if (Session::get('requestID') == null)   
                     <button onclick="window.location='{{ route('requestsform') }}'"  class="mr-6 bg-blue-500 text-white px-4 py-3 w-40 rounded-sm text-sm hover:bg-blue-300 ">Request Form</button>
                    @endif 
                     <button onclick="window.location='{{ route('requests') }}'" class="bg-blue-500 text-white px-4 py-3 w-40 rounded-sm text-sm hover:bg-blue-300 ">View Request List</button>
                    </form>
             </div>
                </div>
              </div>  
            </div>
    </div>
</div>
<!--Live search ajax  -->

<script type="text/javascript">
    $('#search').on('keyup',function(){
        $value=$(this).val();
            $.ajax({
            type : 'get',
            url : '{{URL::to('searchProduct')}}',
            data:{'search':$value},
            success:function(data){
            $('tbody').html(data);
            }
        });
    })

</script>
    <script type="text/javascript">
        $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
    </script>







<!--    <div class=px-40>
       

                    <label for="search" class="sr-only">Search</label>
                    <input type="text" id="search" name ="search" placeholder = "Search" class="w-full rounded-md">
                
                    <h3>Total Record: <span id ='#total_data'></span></h3>
                    <table class="flex items-center">
                        <thead>
                        <tr>
                        <th> Item ID </th>
                        <th> Item Name </th>
                        <th> TagListID </th>
                        <th> TagID </th>
                        <th> TagName </th>
                        <th> Stock </th>
                        <th> Action </th>
                        </tr>
                        </thead>
                        <tbody>
                        
                        </tbody>
                    </table><br>
                    
                @if (Session::get('requestID') == null)
                <button onclick="window.location='{{ url('/request') }}'" class= "btn btn-primary"> Request Form </button>
                @endif
    
                <button onclick="window.location='{{ url('/displayItems') }}'" class= "btn btn-primary"> View Request List </button>
    
         Live search ajax  
        <script type="text/javascript">
            $('#search').on('keyup',function(){
                $value=$(this).val();
                    $.ajax({
                    type : 'get',
                    url : '{{URL::to('searchProduct')}}',
                    data:{'search':$value},
                    success:function(data){
                    $('tbody').html(data);
                    }
                });
            })
    
        </script>
            <script type="text/javascript">
                $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
            </script> -->

</div> 


@endsection