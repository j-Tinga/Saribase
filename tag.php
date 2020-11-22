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
    $itemID=$_SESSION['itemID'];

    $result = $conn->query("SELECT itemName FROM item WHERE itemID = '$itemID'");
    $tagResult = $conn->query("SELECT tagName FROM tag_list INNER JOIN tag ON tag.tagID = tag_list.tagID WHERE tag_list.itemID = '$itemID'");
    
    echo "<div class='jumbotron d-flex justify-content-center'>
    <h5>Tags for: {$result->fetch_assoc()['itemName']}</h5>";
    while ($tag = $tagResult->fetch_assoc()){
        echo"<span class='badge badge-secondary'>{$tag['tagName']}   </span>";
    }
    echo"</div>";

    $materialTags = $conn->query("SELECT tagName, tagID FROM tag WHERE tagType = 'Material' AND tagID NOT IN(SELECT tagID FROM tag_List WHERE itemID = '$itemID')");
    $toolTags= $conn->query("SELECT tagName, tagID FROM tag WHERE tagType = 'Tool' AND tagID NOT IN(SELECT tagID FROM tag_List WHERE itemID = '$itemID')");
    $colorTags=  $conn->query("SELECT tagName, tagID FROM tag WHERE tagType = 'Color' AND tagID NOT IN(SELECT tagID FROM tag_List WHERE itemID = '$itemID')");

    echo "<div class='jumbotron d-flex justify-content-center'>";

        
    echo"
        <table><thead>
        <tr><th colspan='2'>Materials</th></tr>
        <tr>
            <th>Tag Name</th>
            <th>Actions</th>
        </tr></thead>";

    while ($tag = $materialTags->fetch_assoc()){
        echo"<tr><td>{$tag['tagName']}</td>
        <td><form action='$_SERVER[PHP_SELF]' method='POST'>
        <input type='hidden' name='id' value='$tag[tagID]'> 
        <input type='submit' name='addTag' class='btn btn-success' value='Add'>
        <input type='submit' name='edit' class='btn btn-warning' value='Edit'>
        </form></td></tr>";
    }
    echo "</table>";

    echo "<table><thead><tr>
    <tr><th colspan='2'>Tools</th></tr>
    <tr>
        <th>Tag Name</th>
        <th>Actions</th>
    </tr></thead>";
    while ($tag = $toolTags->fetch_assoc()){
        echo"<tr><td>{$tag['tagName']}</td>
        <td><form action='' method='POST'>
        <input type='hidden' name='id' value='$tag[tagID]'> 
        <input type='submit' name='addTag' class='btn btn-success' value='Add'>
        <input type='submit' name='Edit' class='btn btn-warning' value='Edit'>
        </form></td></tr>";
    }
    echo "</table>";

    echo "<table><thead><tr>
    <tr><th colspan='2'>Colors</th></tr>
    <tr>
        <th>Tag Name</th>
        <th>Actions</th>
    </tr></thead>";
    while ($tag = $colorTags->fetch_assoc()){
        echo"<tr><td>{$tag['tagName']}</td>
        <td><form action='' method='POST'>
        <input type='hidden' name='id' value='$tag[tagID]'> 
        <input type='submit' name='addTag' class='btn btn-success' value='Add'>
        <input type='submit' name='edit' class='btn btn-warning' value='Edit'>
        
        </form></td></tr>";
    }
    echo "</table>
    <form action='' method='POST'>
    <input type='submit' name='newTag' class='btn btn-success' value='Create Tag'>
    </form></div>
    ";

    if(isset($_POST['newTag'])){
        echo"<div class='jumbotron d-flex justify-content-center'>
        <form action='' method='POST'>
        <input type='text' name='tagName' class='form-control' placeholder='Write down new tag'> 
        <select id='' name='type' class='form-control'>
        <option value='Material'selected>Materials</option>
        <option value='Tool'>Tools</option>
        <option value='Color'>Colors</option>
        </select>
      
        <input type='submit' name='createTag' class='btn btn-success' value='Create Tag'>
        </form> </div>";
    }

    if(isset($_POST['createTag'])){
        $createQuery = "INSERT INTO tag (tagName, tagType) VALUES ('$_POST[tagName]','$_POST[type]')";
        $conn->query($createQuery); 
        header('Refresh: 0');
    }

    if(isset($_POST['addTag'])){
        echo $_POST['id'];
        $addQuery = "INSERT INTO tag_List (itemID, tagID) VALUES ('$itemID','$_POST[id]')";
        $conn->query($addQuery);
        header('Refresh: 0');
    }

    if(isset($_POST['edit'])){
        $updateQuery = $conn->query("SELECT * FROM tag WHERE tagID= '$_POST[id]'");
        $updateResult = $updateQuery->fetch_assoc();
        echo"<div class='jumbotron d-flex justify-content-center'>
        <form action='' method='POST'>
        <input type='hidden' name='id' value='$_POST[id]'>
        <input type='text' name='newName' class='form-control' placeholder='New tag name' value = '$updateResult[tagName]'> <br>
        <input type='submit' name='updateTag' class='btn btn-success' value='Update Tag'>
        </form> </div>";
    }

    if(isset($_POST['updateTag'])){
        $sql = "UPDATE tag SET tagName='".$_POST['newName']."' WHERE tagID=".$_POST['id']."";
        $conn->query($sql);
        header('Refresh: 0');
    }
?>
    
</body>
</html>