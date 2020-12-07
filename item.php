<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item Table</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class='jumbotron d-flex justify-content-center'>
        <form action='' method='POST'>
            <input type='submit' name='addItem' class='btn btn-success' value='Add Item'>
            <input type='submit' name='addBrand' class='btn btn-success' value='Add Brand'> 
            <input type='submit' name='viewBranches' class='btn btn-primary' value='View Branches'>
        </form>
    </div>

    <?php
    session_start();
    $conn = new mysqli('localhost', 'root', '', '');
	$select = $conn->select_db('saribase');

    echo "<div class='jumbotron d-flex justify-content-center'><table><thead>
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
            </thead>";

    $result = $conn->query("SELECT * FROM item");
    while ($row = $result->fetch_assoc()){
        $supplierResult = $conn->query("SELECT supplierName FROM supplier WHERE supplierID = '$row[supplierID]'");
        $tagResult = $conn->query("SELECT tagName FROM tag_list INNER JOIN tag ON tag.tagID = tag_list.tagID WHERE tag_list.itemID = '$row[itemID]'");
        echo"
        <tr>
            <td>{$row['itemName']}</td>
            <td>{$row['price']}</td>
            <td>{$row['sellingPrice']}</td>
            <td>{$supplierResult->fetch_assoc()['supplierName']}</td>
            <td>{$row['unitCount']}</td>
            <td>
        ";
        while ($tag = $tagResult->fetch_assoc()){
            echo" <span class='badge badge-secondary'>{$tag['tagName']} </span>";
        }
        echo"
            </td>
            <td>{$row['dateAdded']}</td>
            <td><form action='$_SERVER[PHP_SELF]' method='POST'>
                <input type='hidden' name='id' value='$row[itemID]'> 
                <input type='submit' name='edit' class='btn btn-success' value='Edit'>
                <input type='submit' name='delete' class='btn btn-danger' value='Delete'>
            </form></td>
        </tr>
        ";
    }
    echo "</table></div>";
    
    if(isset($_POST['edit'])){
        $itemID = $_POST['id'];
        $updateQuery = $conn->query("SELECT * FROM item WHERE itemID= '$itemID'");
        $updateResult = $updateQuery->fetch_assoc();
        $updateSupplier = $conn->query("SELECT supplierID, supplierName FROM supplier");
        $updateBrand = $conn->query("SELECT brandID, brandName FROM brand");
        $_SESSION['itemID'] = $itemID;

        echo '<div class="jumbotron d-flex justify-content-center">
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
            <select id="Brands" name="itemBrand" class="form-control">';

        while ($brand = $updateBrand->fetch_assoc()){
            echo "<option value='$brand[brandID]'>$brand[brandName] </option>";
        }
        echo '</select>
        <label for="suppliers">Supplier:</label>
        <select id="suppliers" name="itemSupplier" class="form-control">';

        while ($supplier = $updateSupplier->fetch_assoc()){
            echo "<option value='$supplier[supplierID]'>$supplier[supplierName] </option>";
        }
        echo '</select>
        <input type="hidden" name="id" value="'.$updateResult["itemID"].'"><br>
        <input type="submit" value="Update" name="update" class="btn btn-primary">
        <input type="submit" value="Edit Tags" name="editTag" class="btn btn-success">
        </form>
        </div>';
    }

    if(isset($_POST['addItem'])){
        $updateSupplier = $conn->query("SELECT supplierID, supplierName FROM supplier");
        $updateBrand = $conn->query("SELECT brandID, brandName FROM brand");

        echo '<div class="jumbotron d-flex justify-content-center">
        <form action="" method="POST">
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
        <select id="Brands" name="brandID" class="form-control">';
        while ($brand = $updateBrand->fetch_assoc()){
            echo "<option value='$brand[brandID]'>$brand[brandName]</option>";
        }
        echo '</select>
        <label for="suppliers">Supplier:</label>

        <select id="suppliers" name="supplierID" class="form-control">';
        while ($supplier = $updateSupplier->fetch_assoc()){
            echo "<option value='$supplier[supplierID]'>$supplier[supplierName]</option>";
        }
        echo' </select>

        <input type="submit" value="Add Item" name="newItem" class="btn btn-primary">
        </form>
        </div>';
    }

    if(isset($_POST['addBrand'])){
        echo '<div class="jumbotron d-flex justify-content-center">
        <form action="" method="POST">
        <h1>New Brand</h1>
        <label for="inputName">Brand Name:</label>
        <input type="text" name="brandName" id="inputName" class="form-control" placeholder="Input Brand Name"}>
        <input type="submit" value="Add Brand" name="newBrand" class="btn btn-primary">
        </form>
        </div>';
    }

    if(isset($_POST['addSupplier'])){
        echo '<div class="jumbotron d-flex justify-content-center">
        <form action="" method="POST">
        <h1>New Supplier</h1>
        <label for="inputName">Supplier Name:</label>
        <input type="text" name="supplierName" id="inputName" class="form-control" placeholder="Input Supplier Name"}>
        <label for="inputAddress">Supplier Address:</label>
        <input type="text" name="supplierAddress" id="inputAddress" class="form-control" placeholder="Input Supplier Address"}>
        <label for="inputContact">Supplier Contact:</label>
        <input type="text" name="supplierContact" id="inputContact" class="form-control" placeholder="Input Supplier Contact"}>
        <input type="submit" value="Add Supplier" name="newSupplier" class="btn btn-primary">
        </form>
        </div>';
    }

    if(isset($_POST['editTag'])){
        header('Location: tag.php');
    }

    if(isset($_POST['addBranch'])){
        echo '<div class="jumbotron d-flex justify-content-center">
        <form action="" method="POST">
        <h1>Add to Branch</h1>
        <label for="inputName">Brand Name:</label>
        <input type="text" name="brandName" id="inputName" class="form-control" placeholder="Input Brand Name"}>
        <input type="submit" value="Add Brand" name="newBrand" class="btn btn-primary">
        ksdjajsd
        </form>
        </div>';
    }

    require 'itemSQL.php';
    ?>
    
</body>
</html>