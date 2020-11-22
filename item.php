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
    <?php
    session_start();
    $conn = new mysqli('localhost', 'root', '', '');
	$select = $conn->select_db('saribase');

    echo "<div class='jumbotron d-flex justify-content-center'><table><thead><tr>
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
        ";
    }
    echo "</table></div>";
    
    if(isset($_POST['edit'])){
        $itemID = $_POST['id'];
        $updateQuery = $conn->query("SELECT * FROM item WHERE itemID= '$itemID'");
        $updateResult = $updateQuery->fetch_assoc();
        $updateSupplier = $conn->query("SELECT supplierName FROM supplier WHERE supplierID = '$updateResult[supplierID]'");
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

        <input type="hidden" name="id" value="'.$updateResult["itemID"].'"><br>
        <input type="submit" value="Update" name="update" class="btn btn-primary">
        <input type="submit" value="Edit Tags" name="editTag" class="btn btn-success">
        </form>
        </div>';
        }

    if(isset($_POST['update'])){
        $sql = "UPDATE products_table SET itemName='".$_POST['name']."', price='".$_POST['price']."', sellingPrice='".$_POST['sellPrice']."', unitCount='".$_POST['unitCount']."' WHERE id=".$_POST['id']."";

        if ($conn->query($sql) === TRUE) {
            echo '<div class="jumbotron d-flex justify-content-center"> <h1>Updated Successfully<center><form action="" method="POST"><input type="submit" value="Show Table" name="show" class="btn btn-success"> </form></center></h1></div>';
        } else {
            echo '<div class="jumbotron d-flex justify-content-center"> <h1>"Error: " . $sql . "<br>" . $conn->error</h1>  </div>';
        }
    }

    if(isset($_POST['editTag'])){
        header('Location: tag.php');
    }

    if(isset($_POST['Delete'])){
        $sql = "UPDATE products_table SET itemName='".$_POST['name']."', price='".$_POST['price']."', sellingPrice='".$_POST['sellPrice']."', unitCount='".$_POST['unitCount']."' WHERE id=".$_POST['id']."";

        if ($conn->query($sql) === TRUE) {
            echo '<div class="jumbotron d-flex justify-content-center"> <h1>Deleted Successfully</h1></div>';
        } else {
            echo '<div class="jumbotron d-flex justify-content-center"> <h1>"Error: " . $sql . "<br>" . $conn->error</h1>  </div>';
        }
    }
    ?>
    
</body>
</html>