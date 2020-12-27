<div class="jumbotron d-flex justify-content-center">
    <form action="newItem" method="POST">
        <h1> New Item</h1>
        <label for="inputName">Item Name:</label>
        <input type="text" name="name" id="inputName" class="form-control" placeholder="Input Name"}>

        <label for="price">Price:</label>
        <input type="text" name="price" id="price" class="form-control" placeholder="Input Price">

        <label for="selpric">Selling Price:</label>
        <input type="text" name="sellPrice" id="selpric" class="form-control" placeholder="Input Selling Price">

        <label for="unitCount">Unit Count:</label>
        <input type="text" name="unitCount" id="unitCount" class="form-control" placeholder="Input Unit Count">

        <label for="Brands">Brand:</label>
        <select id="Brands" name="brandID" class="form-control">
        @foreach($brands as $brand)
            <option value='{{$brand->brandID}}'>{{$brand->brandName}}</option>
        @endforeach
        </select>

        <label for="suppliers">Supplier:</label>
        <select id="suppliers" name="itemSupplier" class="form-control">
        @foreach($suppliers as $supplier)
            <option value='{{$supplier->supplierID}}'>{{$supplier->supplierName}}</option>
        @endforeach
        </select>
        <input type="submit" value="Add Item" name="newItem" class="btn btn-primary">
</div>