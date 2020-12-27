<div class="jumbotron d-flex justify-content-center">
        <form action="" method="POST">
            <h1> Edit Product: '.$updateResult["itemName"].'</h1>
            <label for="inputName">Item Name:</label>
            <input type="text" name="name" id="inputName" class="form-control" value="'.$updateResult["itemName"].'"}>

            <label for="price">Price:</label>
            <input type="text" name="price" id="price" class="form-control" value="'.$updateResult["price"].'">

            <label for="selpric">Selling Price:</label>
            <input type="text" name="sellPrice" id="selpric" class="form-control" value="'.$updateResult["sellingPrice"].'">

            <label for="unitCount">Unit Count:</label>
            <input type="text" name="unitCount" id="unitCount" class="form-control" value="'.$updateResult["unitCount"].'">

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
            <input type="hidden" name="id" value="'.$updateResult["itemID"].'"><br>
            <input type="submit" value="Update" name="update" class="btn btn-primary">
            <input type="submit" value="Edit Tags" name="editTag" class="btn btn-success">
        </form>
</div>