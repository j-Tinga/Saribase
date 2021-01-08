<!--Form for Editing Item-->
<div class="jumbotron d-flex justify-content-center">
    <form action="editItem" method="POST">
        @csrf 
        <h1> Edit Product: {{$editItem->itemName}}</h1>
        <label for="inputName">Item Name:</label>
        <input type="text" name="name" id="inputName" class="form-control" value="{{$editItem->itemName}}"}>

        <label for="price">Price:</label>
        <input type="text" name="price" id="price" class="form-control" value="{{$editItem->price}}">

        <label for="selpric">Selling Price:</label>
        <input type="text" name="sellPrice" id="selpric" class="form-control" value="{{$editItem->sellingPrice}}">

        <label for="unitCount">Unit Count:</label>
        <input type="text" name="unitCount" id="unitCount" class="form-control" value="{{$editItem->unitCount}}">

        <label for="Brands">Brand:</label>
        <select id="Brands" name="itemBrand" class="form-control">
            @foreach($brands as $brand)
                <option value='{{$brand->brandID}}'>{{$brand->brandName}}</option>
            @endforeach
        </select>

        <label for="suppliers">Supplier:</label>
        <select id="suppliers" name="itemSupplier" class="form-control">
        @foreach($suppliers as $supplier)
            <option value='{{$supplier->supplierID}}'>{{$supplier->supplierID}}</option>
        @endforeach
        </select>
        <input type="hidden" name="id" value="{{$editItem->itemID}}"><br>
        <input type="submit" value="Update" name="button" class="btn btn-primary">
        <input type="submit" value="Edit Tags" name="button" class="btn btn-success">

    </form>
</div>