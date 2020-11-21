<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item Table</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

	<style>
		body {background-color: #98c2dc;}
		.jumbotron {width: 85%; margin: auto; margin-top: 30px; background-color: #cfecfe; border-radius: 25px;}
		h6{color: red;}
		table, th, td { border: 1px solid black;text-align: center;}
	</style>

</head>
<body>
    <?php
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
        <td></td>
        something differe
        ";
        
    }
    echo "</tbody></table></div>";
    ?>
</body>
</html>