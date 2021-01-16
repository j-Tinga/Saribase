@extends('layout.layout')

@section('admin')
    bg-gray-500
@endsection

@section('content')


<div class="grid grid-cols-3 gap-4 p-8 justify-center">
                    
                    
        <div class="flex justify-center">
            <button class="bg-blue-500 text-white px-4 py-3 rounded-sm font-medium w-1/2 hover:bg-blue-300" type="button" onclick="toggleModal('employee')"> Add Employee </button>
        </div>
        <div class="flex justify-center">
            <button class="bg-blue-500 text-white px-4 py-3 rounded-sm font-medium w-1/2 hover:bg-blue-300" type="button" onclick="toggleModal('item')"> Add Item </button>
        </div>     
        <div class="flex justify-center">
            <button class="bg-blue-500 text-white px-4 py-3 rounded-sm font-medium w-1/2 hover:bg-blue-300" type="button" onclick="toggleModal('branches')"> Add Branch </button>
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
        
                <button type="submit" class="bg-green-500 text-white active:bg-green-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1" type="button" style="transition: all .15s ease" onclick="toggleModal('employee')">
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
          
                  <button type="submit" class="bg-green-500 text-white active:bg-green-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1" type="button" style="transition: all .15s ease" onclick="toggleModal('item')">
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
          
                  <button type="submit" class="bg-green-500 text-white active:bg-green-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1" type="button" style="transition: all .15s ease" onclick="toggleModal('branches')">
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
</script>


   
@endsection