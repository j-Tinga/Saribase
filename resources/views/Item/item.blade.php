<!--Main Page for Item-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item Table</title>
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
</head>
<body>
    <div class='jumbotron d-flex justify-content-center'>
        <form action='addActions' method='POST'>
            @csrf
            <input type='submit' name='button' class='btn btn-success' value='Add Item'>
            <input type='submit' name='button' class='btn btn-success' value='Add Brand'> 
            <input type='submit' name='button' class='btn btn-success' value='Add Supplier'>
        </form>
    </div>
    <div class='jumbotron d-flex justify-content-center'>
        <table>
            <thead>
                <tr><th colspan='8'>Item Table</th></tr>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Selling Price</th>
                    <th>Supplier</th>
                    <th>Unit Count</th>
                    <th>Tags</th>
                    <th>Last Updated</th>
                    <th>Actions</th>
                </tr>
            </thead>
            @foreach($items as $item)
                <tr>
                    <td>{{$item->itemName}}</td>
                    <td>{{$item->price}}</td>
                    <td>{{$item->sellingPrice}}</td>
                    <td>{{$item->supplierName}}</td>
                    <td>{{$item->unitCount}}</td>
                    <td>
                        @foreach($tags as $tag)
                            @if($tag->itemID == $item->itemID)
                                <span class='badge badge-secondary'>{{$tag->tagName}}</span>
                            @endif
                        @endforeach
                    </td>
                    <td>{{$item->dateAdded}}</td>
                    <td><form action='itemActions' method='POST'>
                        @csrf
                        <input type='hidden' name='id' value='{{$item->itemID}}'> 
                        <input type='submit' name='button' class='btn btn-success' value='Edit'>
                        <input type='submit' name='button' class='btn btn-danger' value='Delete'>
                    </form></td>
                </tr>
            @endforeach
        </table>
    </div>
    @if(isset($newItem))
        @include('Item.newItem')
    @endif

    @if(isset($newBrand))
        @include('Item.newBrand')
    @endif

    @if(isset($newSupplier))
        @include('Item.newSupplier')
    @endif

    @if(isset($editItem))
        @include('Item.editItem')
    @endif
</body>
</html>

    
