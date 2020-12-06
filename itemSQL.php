<?php
    if(isset($_POST['newItem'])){
        $createQuery = "INSERT INTO item (brandID, itemName, price, sellingPrice, unitCount, supplierID) VALUES ('$_POST[brandID]','$_POST[name]', '$_POST[price]', '$_POST[sellPrice]','$_POST[unitCount]', '$_POST[supplierID]')";
        if ($conn->query($createQuery) === TRUE) {
            header("Refresh:0");
        }else {
            echo $conn->error;
        }
    }

    if(isset($_POST['newBrand'])){
        $createQuery = "INSERT INTO brand (brandName) VALUES ('$_POST[brandName]')";

        if ($conn->query($createQuery) == TRUE) {
            header("Refresh:0");
        }else {
            echo $conn->error;
        }
    }

    if(isset($_POST['newSupplier'])){
        $createQuery = "INSERT INTO supplier (supplierName, supplierAddress, supplierContact) VALUES ('$_POST[supplierName]','$_POST[supplierAddress]', '$_POST[supplierContact]')";

        if ($conn->query($createQuery) === TRUE) {
            echo '<div class="jumbotron d-flex justify-content-center"> <h1>Supplier Added Successfully</h1></div>';
            header("Refresh:0");
        }else {
            echo $conn->error;
        }
    }

    if(isset($_POST['update'])){
        $sql = "UPDATE item SET itemName='".$_POST['name']."', price='".$_POST['price']."', sellingPrice='".$_POST['sellPrice']."', unitCount='".$_POST['unitCount']."', supplierID='".$_POST['itemSupplier']."', brandID='".$_POST['itemBrand']."' WHERE itemID=".$_POST['id']."";

        if ($conn->query($sql) === TRUE) {
            echo '<div class="jumbotron d-flex justify-content-center"> <h1>Updated Successfully</h1></div>';
            header("Refresh:0");
        } else {
            echo $conn->error;
        }
    }

    if(isset($_POST['delete'])){
        $sql = "DELETE FROM item WHERE itemID=".$_POST['id']."";

        if ($conn->query($sql) === TRUE) {
            header("Refresh:0");
        } else {
            echo $conn->error;
        }
    }
?>