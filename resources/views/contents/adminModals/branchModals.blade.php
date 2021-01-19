<!--New Item Modal -->
<div class=" hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="newItem">
    <div class="w-3/12 relative w-auto my-6 mx-auto max-w-3xl">
      <!--content-->
      <div class=" border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
        <!--header-->
        <div class="flex items-start justify-between p-5 border-b border-solid border-gray-300 rounded-t">
          <h3 class="text-3xl font-semibold">
            Add Item
          </h3>
          <button class="p-1 ml-auto border-0 text-black float-right text-3xl leading-none font-semibold outline-none" onclick="toggleModal('newItem')">
              ×
          </button>
        </div>
        <!--body-->
        <div class="w-full relative w-96 p-6 flex-auto">
         
          <form action="newItem" method = "post">
              @csrf
                <div class="mb-4">
                    <label for="fname" class ="sr-only">Item Name:</label>
                      <input type="text" name="name" id="inputName" class="bg-gray-200 border-2 w-full h-1  p-4 rounded-sm" placeholder="Item Name">
                      @error('fname')
                          <div class ="m-2 text-red-500 mt-2 text-sm">
                              {{$message}}
                          </div>
                      @enderror 
                </div>
                <div class = "p-0 mb-4 flex ">
                  <div class="w-full">
                      <label for="lname" class ="sr-only">Price:</label>
                      <input type="text" name="price" id="price" class="bg-gray-200 border-2 w-full h-1  p-4 rounded-sm" placeholder="Price">
                      @error('lname')
                          <div class ="m-2 text-red-500 mt-2 text-sm">
                              {{$message}}
                          </div>
                      @enderror
                  </div>
                  <div class="w-full  ml-6">
                        <label for="selpric" class ="sr-only">Selling Price:</label>
                        <input type="text" name="sellPrice" id="selpric" class="bg-gray-200 border-2 w-full h-1  p-4 rounded-sm" placeholder="Selling Price">
                        @error('lname')
                            <div class ="m-2 text-red-500 mt-2 text-sm">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                </div>
            
              <div class = "mb-4"> 
                  <label for="number" class ="sr-only">Unit Count:</label>
                  <input type="text"name="unitCount" id="number" placeholder="Unit Count" class="bg-gray-200 border-2 w-full h-1 p-4 rounded-sm ">
                  @error('number')
                  <div class ="m-2 text-red-500 mt-2 text-sm">
                      {{$message}}
                  </div>
                  @enderror
              </div>