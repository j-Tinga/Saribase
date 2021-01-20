@extends('layout.layout')

@section('admin')
    bg-gray-500
@endsection

@section('content')


<div class="bg-gray-800 justify-center">
                    
        
        <nav class="fixed flex w-full flex-wrap p-2 bg-gray-800">
            <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
              <div class="relative flex items-center h-16">
                
                    <div class="space-x-16">
                      
                      <button class="focus:outline-none focus:bg-gray-900 hover:bg-gray-700 text-gray-300 hover:text-white px-3 py-2 rounded-md font-medium" onclick="toggleTable('t_employee')">Employees</button>
                      <button class="focus:outline-none focus:bg-gray-900 hover:bg-gray-700 text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md font-medium" onclick="toggleTable('t_items')">Items</button>
                      <button class="focus:outline-none focus:bg-gray-900 hover:bg-gray-700 text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md font-medium" onclick="toggleTable('t_branches')">Branches</button>
                      <button class="focus:outline-none focus:bg-gray-900 hover:bg-gray-700 text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md font-medium" onclick="toggleTable('t_suppliers')">Suppliers</button>
                      <button class="focus:outline-none focus:bg-gray-900 hover:bg-gray-700 text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md font-medium" onclick="toggleTable('t_brands')">Brands</button>

                    </div>
              </div>
            </div>
           
        </nav>
</div>
<div class="mt-24 hidden flex justify-center p-8" id="tables">
        <!--employee-->
        <div class="content w-10/12 flex flex-col" id="t_employee">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">

                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-md">
                    <div class="flex whitespace-nowrap bg-white justify-between">
                        <div class="px-6 py-4 whitespace-nowrap bg-white text-gray-900 text-xl uppercase flex items-center"> 
                            <h2>Employee List</h2>
                            
                        </div>
                        <div class="px-6 py-4 whitespace-nowrap bg-white text-gray-900 text-lg font-semibold flex items-center"> 
                        
                                <button onclick="toggleModal('employee')" class="mr-6 bg-blue-500 text-white px-4 py-3 w-24 rounded-sm text-sm hover:bg-blue-300 ">Add</button>
                        
                        </div>
                    </div>
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="w-40 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Employee ID
                                </th>
                                <th scope="col" class="w-40 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Type
                                </th>
                                <th scope="col" class="w-40 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Full Name
                                </th>
                                <th scope="col" class="w-40 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Contact Number
                                </th>
                                <th scope="col" class="w-40 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Branch
                                </th>
                                <th scope="col" class="w-40 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Action
                                </th>
                            </tr>   
                        </thead> 
                        <tbody class="bg-white divide-y divide-gray-200">    
                                    @foreach ($employees as $employee)
                                    <tr>
                                        <td class="px-7 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900">{{$employee->employeeID}}</div>
            
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900">{{$employee->levelName}}</div>
                                        
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">{{$employee->lastName}}, {{$employee->firstName}}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">{{$employee->contactNumber}}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">{{$employee->branchName}}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap flex">
                                            <div class="text-sm text-gray-900 ">
                                                <form action="" method = "POST">
                                                    @csrf
                                                    <button type="submit" class="text-indigo-600 hover:text-indigo-900">Edit</button>
                                                </form>
                                            </div>
                                            <div class="text-sm text-gray-900 ml-12">
                                                <form action="" method = "POST">
                                                    @csrf
                                                    <button type="submit" class="text-red-500 hover:text-red-900">Delete</button>
                                                </form>
                                            </div>
                                        </td>
                                        
                                        </tr>
                                    @endforeach    
                                                            
                        </tbody>
                    </table>
                    
                </div>
            </div>  
            </div>
        </div>
        <!--items-->
        <div class="content w-10/12 flex flex-col" id="t_items">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">

                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-md">
                    <div class="flex whitespace-nowrap bg-white justify-between">
                        <div class="px-6 py-4 whitespace-nowrap bg-white text-gray-900 text-xl uppercase flex items-center"> 
                            <h2>Item List</h2>
                            
                        </div>
                        <div class="px-6 py-4 whitespace-nowrap bg-white text-gray-900 text-lg font-semibold flex items-center"> 
                            
                                <button onclick="toggleModal('item')" class="mr-6 bg-blue-500 text-white px-4 py-3 w-24 rounded-sm text-sm hover:bg-blue-300 ">Add</button>
                           
                            
                        </div>
                    </div>
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
                                    Brand
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Price
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Selling Price
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Unit Count
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Date Added
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Action
                            </th>
                        </tr>   
                    </thead> 
                    <tbody class="bg-white divide-y divide-gray-200">    
                        
                                        <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900">test</div>
            
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900">test1</div>
                                        
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900">test2</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">test</div>
        
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">test1</div>
                                    
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">test2</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">test2</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap flex">
                                            <div class="text-sm text-gray-900 ">
                                                <form action="" method = "POST">
                                                    @csrf
                                                    <button type="submit" class="text-indigo-600 hover:text-indigo-900">Edit</button>
                                                </form>
                                            </div>
                                            <div class="text-sm text-gray-900 ml-12">
                                                <form action="" method = "POST">
                                                    @csrf
                                                    <button type="submit" class="text-red-500 hover:text-red-900">Delete</button>
                                                </form>
                                            </div>
                                        </td>
                                        
                                        </tr>                   
                    </tbody>
                </table>
                
                </div>
            </div>  
            </div>
        </div>
        <!--branches-->
        <div class="content w-10/12 flex flex-col" id="t_branches">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">

                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-md">
                    <div class="flex whitespace-nowrap bg-white justify-between">
                        <div class="px-6 py-4 whitespace-nowrap bg-white text-gray-900 text-xl uppercase flex items-center"> 
                            <h2>Branch List</h2>
                            
                        </div>
                        <div class="px-6 py-4 whitespace-nowrap bg-white text-gray-900 text-lg font-semibold flex items-center"> 
                                <button onclick="toggleModal('branches')" class="mr-6 bg-blue-500 text-white px-4 py-3 w-24 rounded-sm text-sm hover:bg-blue-300 ">Add</button>
                            
                        </div>
                    </div>
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Branch ID
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Branch Name
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Branch Address
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Branch Manager
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Branch Type
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Branch Contact
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Action
                            </th>
                        </tr>   
                    </thead> 
                    <tbody class="bg-white divide-y divide-gray-200">    
                                @foreach ($branches as $branch)
                                <tr>
                                    <td class="px-7 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">{{$branch->branchID}}</div>
        
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">{{$branch->branchName}}</div>
                                    
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">{{$branch->branchAddress}}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">{{$branch->lastName}}, {{$branch->firstName}}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">{{$branch->branchType}}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">{{$branch->branchContact}}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap flex">
                                        <div class="text-sm text-gray-900 ">
                                            <form action="" method = "POST">
                                                @csrf
                                                <button type="submit" class="text-indigo-600 hover:text-indigo-900">Edit</button>
                                            </form>
                                        </div>
                                        <div class="text-sm text-gray-900 ml-12">
                                            <form action="" method = "POST">
                                                @csrf
                                                <button type="submit" class="text-red-500 hover:text-red-900">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                    
                                    
                                </tr>     
                                @endforeach
                                                     
                    </tbody>
                </table>
                
                </div>
            </div>  
            </div>
        </div>
        <!--suppliers-->
        <div class="content flex flex-col" id="t_suppliers">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-md">
                    <div class="flex whitespace-nowrap bg-white justify-between">
                        <div class="px-6 py-4 whitespace-nowrap bg-white text-gray-900 text-xl uppercase flex items-center"> 
                            <h2>Supplier List</h2>
                            
                        </div>
                        <div class="px-6 py-4 whitespace-nowrap bg-white text-gray-900 text-lg font-semibold flex items-center"> 
                            <form action="">
                                @csrf
                                <button type="submit" class="mr-6 bg-blue-500 text-white px-4 py-3 w-24 rounded-sm text-sm hover:bg-blue-300 ">Add</button>
                            </form>
                            
                        </div>
                    </div>
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Supplier ID
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Supplier Name
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Supplier Address
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Supplier Contact
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Action
                            </th>
                        </tr>   
                    </thead> 
                    <tbody class="bg-white divide-y divide-gray-200">    
                        
                        @foreach ($suppliers as $supplier)
                        <tr>
                            <td class="px-7 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{$supplier->supplierID}}</div>

                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{$supplier->supplierName}}</div>
                            
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{$supplier->supplierAddress}}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{$supplier->supplierContact}}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap flex">
                                <div class="text-sm text-gray-900 ">
                                    <form action="" method = "POST">
                                        @csrf
                                        <button type="submit" class="text-indigo-600 hover:text-indigo-900">Edit</button>
                                    </form>
                                </div>
                                <div class="text-sm text-gray-900 ml-12">
                                    <form action="" method = "POST">
                                        @csrf
                                        <button type="submit" class="text-red-500 hover:text-red-900">Delete</button>
                                    </form>
                                </div>
                            </td>
                            
                            
                        </tr>     
                        @endforeach                   
                    </tbody>
                </table>
                
                </div>
            </div>  
            </div>
        </div>
        <!--Brands-->
        <div class="w-2/5 content flex flex-col" id="t_brands">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">

                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-md">
                    <div class="flex whitespace-nowrap bg-white justify-between">
                        <div class="px-6 py-4 whitespace-nowrap bg-white text-gray-900 text-xl uppercase flex items-center"> 
                            <h2>Brand List</h2>
                            
                        </div>
                        <div class="px-6 py-4 whitespace-nowrap bg-white text-gray-900 text-lg font-semibold flex items-center"> 
                            <form action="">
                                @csrf
                                <button type="submit" class="mr-6 bg-blue-500 text-white px-4 py-3 w-24 rounded-sm text-sm hover:bg-blue-300 ">Add</button>
                            </form>
                            
                        </div>
                    </div>
                       
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Brand ID
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Brand Name
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Action
                                </th>
                            </tr>   
                        </thead> 
                        <tbody class="bg-white divide-y divide-gray-200">    
                            
                                        @foreach ($brands as $brand)
                                        <tr>
                                            <td class="px-7 py-4 whitespace-nowrap">
                                                    <div class="text-sm text-gray-900">{{$brand->brandID}}</div>
                
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm text-gray-900">{{$brand->brandName}}</div>
                                            
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap flex">
                                                <div class="text-sm text-gray-900 ">
                                                    <form action="" method = "POST">
                                                        @csrf
                                                        <button type="submit" class="text-indigo-600 hover:text-indigo-900">Edit</button>
                                                    </form>
                                                </div>
                                                <div class="text-sm text-gray-900 ml-12">
                                                    <form action="" method = "POST">
                                                        @csrf
                                                        <button type="submit" class="text-red-500 hover:text-red-900">Delete</button>
                                                    </form>
                                                </div>
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
           
   
@if($errors->any())

<!--Error Modal-->    
    
<div class=" overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="error">
    <div class="w-3/12 relative w-auto my-6 mx-auto max-w-3xl">
      <!--content-->
      <div class=" border-0 rounded-md shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
        <!--header-->
        <div class="flex items-start justify-end p-5 pb-0 rounded-t">
          
          <button class="p-1 ml-auto border-0 text-black float-right text-3xl leading-none font-semibold outline-none" onclick="toggleModal('error')">
              ×
          </button>
        </div>
        <!--body-->
        <div class="pt-0 w-full relative p-6 flex-auto text-red-500">
            ERROR: Form has not been submitted
        </div>
        <!--footer-->
        
      </div>
    </div>
  </div>

    <div class="opacity-25 fixed inset-0 z-40 bg-black" id="backdrop"></div>
@else
    <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="backdrop"></div> 
@endif





<!--Employee Modal-->    
    
<div class=" hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="employee">
  <div class="w-3/12 relative w-auto my-6 mx-auto max-w-3xl">
    <!--content-->
    <div class=" border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
      <!--header-->
      <div class="flex items-start justify-between p-5 border-b border-solid border-gray-300 rounded-t">
        <h3 class="text-3xl font-semibold">
          Add Employee
        </h3>
        <button class="p-1 ml-auto border-0 text-black float-right text-3xl leading-none font-semibold outline-none" onclick="toggleModal('employee')">
            ×
        </button>
      </div>
      <!--body-->
      <div class="w-full relative w-96 p-6 flex-auto">
       
        <form action="addEmployee" method = "post">
            @csrf
            
            <div class = "p-0 mb-4 flex "> <!--first and last name -->
                <div class="w-full">

                    <label for="fname" class ="sr-only">First Name</label>
                    <input type="text" name="fname" id="fname" placeholder="First Name" class="bg-gray-200 border-2 w-full h-1  p-4 rounded-sm ">
                    @error('fname')
                        <div class ="m-2 text-red-500 mt-2 text-sm">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="w-full ml-6">
                    <label for="lname" class ="sr-only">Last Name</label>
                    <input type="text"name="lname" id="lname" placeholder="Last Name" class="bg-gray-200 border-2 w-full h-1  p-4 rounded-sm ">
                    @error('lname')
                        <div class ="m-2 text-red-500 mt-2 text-sm">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                
            </div>

            <div class = "mb-4"> <!--number -->
                <label for="number" class ="sr-only">Contact Number</label>
                <input type="text"name="number" id="number" placeholder="Contact Number" class="bg-gray-200 border-2 w-full h-1 p-4 rounded-sm ">
                @error('number')
                <div class ="m-2 text-red-500 mt-2 text-sm">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="flex mb-4">
                <label for="branch" class="m-2">Branch ID: </label>
                <select name="branch" id="branch" class="w-12 bg-gray-200 border-2 rounded-sm text-center">
                    
                    @foreach ($branches as $branch)
                        <option value="{{$branch->branchID}}">{{$branch->branchID}}</option>
                    @endforeach
                </select>
                @error('branch')
                <div class ="m-2 text-red-500 mt-2 text-sm">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class = "mb-4"> <!--password -->
                <label for="password" class ="sr-only">Password</label>
                <input type="password"name="password" id="password" placeholder="Password" class="bg-gray-200 border-2 w-full h-1 p-4 rounded-sm ">
                @error('password')
                <div class ="m-2 text-red-500 mt-2 text-sm">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class = "mb-8"> <!--c_password -->
                <label for="password_confirmation" class ="sr-only">Confirm Password</label>
                <input type="password"name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" class="bg-gray-200 border-2 w-full h-1 p-4 rounded-sm" >
                @error('password_confirmation')
                <div class ="m-2 text-red-500 mt-2 text-sm">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="mt-6 flex items-center justify-end p-6 border-t border-solid border-gray-300 rounded-b">
        
                <button type="submit" class="bg-blue-500 text-white hover:bg-blue-300 uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1" type="button" style="transition: all .15s ease" onclick="toggleModal('employee')">
                  Confirm
                </button>
                
            </div>
        </form>
        
        
      </div>
      <!--footer-->
      
    </div>
  </div>
</div>

<!--Item Modal-->

<div class=" hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="item">
    <div class="w-3/12 relative w-auto my-6 mx-auto max-w-3xl">
      <!--content-->
      <div class=" border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
        <!--header-->
        <div class="flex items-start justify-between p-5 border-b border-solid border-gray-300 rounded-t">
          <h3 class="text-3xl font-semibold">
            Add Item
          </h3>
          <button class="p-1 ml-auto border-0 text-black float-right text-3xl leading-none font-semibold outline-none" onclick="toggleModal('item')">
              ×
          </button>
        </div>
        <!--body-->
        <div class="w-full relative w-96 p-6 flex-auto">
         
          <form action="addEmployee" method = "post">
              @csrf
              
              <div class = "p-0 mb-4 flex "> <!--first and last name -->
                  <div class="w-full">
  
                      <label for="fname" class ="sr-only">First Name</label>
                      <input type="text" name="fname" id="fname" placeholder="First Name" class="bg-gray-200 border-2 w-full h-1  p-4 rounded-sm ">
                      @error('fname')
                          <div class ="m-2 text-red-500 mt-2 text-sm">
                              {{$message}}
                          </div>
                      @enderror
                  </div>
  
                  <div class="w-full ml-6">
                      <label for="lname" class ="sr-only">Last Name</label>
                      <input type="text"name="lname" id="lname" placeholder="Last Name" class="bg-gray-200 border-2 w-full h-1  p-4 rounded-sm ">
                      @error('lname')
                          <div class ="m-2 text-red-500 mt-2 text-sm">
                              {{$message}}
                          </div>
                      @enderror
                  </div>
                  
              </div>
  
              <div class = "mb-4"> <!--number -->
                  <label for="number" class ="sr-only">Contact Number</label>
                  <input type="text"name="number" id="number" placeholder="Contact Number" class="bg-gray-200 border-2 w-full h-1 p-4 rounded-sm ">
                  @error('number')
                  <div class ="m-2 text-red-500 mt-2 text-sm">
                      {{$message}}
                  </div>
                  @enderror
              </div>
              <div class="flex mb-4">
                  <label for="branch" class="m-2">Branch ID: </label>
                  <select name="branch" id="branch" class="w-12 bg-gray-200 border-2 rounded-sm text-center">
                      
                      @foreach ($branches as $branch)
                          <option value="{{$branch->branchID}}">{{$branch->branchID}}</option>
                      @endforeach
                  </select>
                  @error('branch')
                  <div class ="m-2 text-red-500 mt-2 text-sm">
                      {{$message}}
                  </div>
                  @enderror
              </div>
              <div class = "mb-4"> <!--password -->
                  <label for="password" class ="sr-only">Password</label>
                  <input type="password"name="password" id="password" placeholder="Password" class="bg-gray-200 border-2 w-full h-1 p-4 rounded-sm ">
                  @error('password')
                  <div class ="m-2 text-red-500 mt-2 text-sm">
                      {{$message}}
                  </div>
                  @enderror
              </div>
              <div class = "mb-8"> <!--c_password -->
                  <label for="password_confirmation" class ="sr-only">Confirm Password</label>
                  <input type="password"name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" class="bg-gray-200 border-2 w-full h-1 p-4 rounded-sm" >
                  @error('password_confirmation')
                  <div class ="m-2 text-red-500 mt-2 text-sm">
                      {{$message}}
                  </div>
                  @enderror
              </div>
              <div class="mt-6 flex items-center justify-end p-6 border-t border-solid border-gray-300 rounded-b">
          
                  <button type="submit" class="bg-blue-500 text-white hover:bg-blue-300 uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1" type="button" style="transition: all .15s ease" onclick="toggleModal('item')">
                    Confirm
                  </button>
                  
              </div>
          </form>
          
          
        </div>
        <!--footer-->
        
      </div>
    </div>
  </div>

<!--Branch Modal-->    
    
<div class=" hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="branches">
    <div class="w-3/12 relative w-auto my-6 mx-auto max-w-3xl">
      <!--content-->
      <div class=" border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
        <!--header-->
        <div class="flex items-start justify-between p-5 border-b border-solid border-gray-300 rounded-t">
          <h3 class="text-3xl font-semibold">
            Add Branch
          </h3>
          <button class="p-1 ml-auto border-0 text-black float-right text-3xl leading-none font-semibold outline-none" onclick="toggleModal('branches')">
              ×
          </button>
        </div>
        <!--body-->
        <div class="w-full relative w-96 p-6 flex-auto">
         
          <form action="addBranch" method = "post">
              @csrf
              
              <div class = "p-0 mb-4 flex "> <!--branch name -->
                  <div class="w-full">
  
                      <label for="bname" class ="sr-only">First Name</label>
                      <input type="text" name="bname" id="bname" placeholder="Branch Name" class="bg-gray-200 border-2 w-full h-1  p-4 rounded-sm ">
                      @error('bname')
                          <div class ="m-2 text-red-500 mt-2 text-sm">
                              {{$message}}
                          </div>
                      @enderror
                  </div>
              </div>
  
              <div class = "mb-4"> <!--address -->
                  <label for="address" class ="sr-only">Branch Address</label>
                  <input type="text" name="address" id="address" placeholder="Branch Address" class="bg-gray-200 border-2 w-full h-1 p-4 rounded-sm ">
                  @error('address')
                  <div class ="m-2 text-red-500 mt-2 text-sm">
                      {{$message}}
                  </div>
                  @enderror
              </div>

              <div class="flex mb-4">
                  <label for="bmanager" class="m-2">Branch Manager: </label>
                  <select name="bmanager" id="bmanager" class="w-full bg-gray-200 border-2 rounded-sm text-center">
                      
                        <option value="">None</option>

                      @foreach ($employees as $employee)
                          <option value="{{$employee->employeeID}}">{{$employee->employeeID}} - {{$employee->lastName}}</option>
                      @endforeach
                  </select>
                  @error('bmanager')
                  <div class ="m-2 text-red-500 mt-2 text-sm">
                      {{$message}}
                  </div>
                  @enderror
              </div>
              
              <div class="flex mb-4">
                  <label for="btype" class="m-2">Type: </label>
                  <select name="btype" id="btype" class="w-full bg-gray-200 border-2 rounded-sm text-center">
                          <option value="Main">Main</option>
                          <option value="Sub">Sub</option>
                  </select>
                  @error('btype')
                  <div class ="m-2 text-red-500 mt-2 text-sm">
                      {{$message}}
                  </div>
                  @enderror
              </div>
              
              <div class = "mb-4"> <!--contact -->
                  <label for="contact" class ="sr-only">Contact Number</label>
                  <input type="text" name="contact" id="contact" placeholder="Branch Contact" class="bg-gray-200 border-2 w-full h-1 p-4 rounded-sm ">
                  @error('contact')
                  <div class ="m-2 text-red-500 mt-2 text-sm">
                      {{$message}}
                  </div>
                  @enderror
              </div>

              <div class="mt-6 flex items-center justify-end p-6 border-t border-solid border-gray-300 rounded-b">
          
                  <button type="submit" class="bg-blue-500 text-white hover:bg-blue-300 uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1" type="button" style="transition: all .15s ease" onclick="toggleModal('branches')">
                    Confirm
                  </button>
                  
              </div>
          </form>
          
          
        </div>
        <!--footer-->
        
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
  function toggleTable(tableID){
      var i, content;

      content = document.getElementsByClassName("content");
      
      document.getElementById("tables").classList.remove("hidden");  
      for(i=0;i<content.length;i++){
          content[i].classList.add("hidden");
      }  

      active_table=document.getElementById(tableID);
      active_table.classList.toggle("hidden");

      

  }   
</script>

@endsection