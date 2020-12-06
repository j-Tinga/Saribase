<!--where SQL queries for tag-->

<?php
    if(isset($_POST['back'])){
        header('Location: item.php');
    }

    if(isset($_POST['updateTag'])){
        $sql = "UPDATE tag SET tagName='".$_POST['newName']."' WHERE tagID=".$_POST['id']."";
        $conn->query($sql);
        header("Refresh:0");
    }

    if(isset($_POST['deleteTag'])){
        $sql = "DELETE FROM tag WHERE tagID=".$_POST['id']."";
        $conn->query($sql);
        header("Refresh:0");
    }

    if(isset($_POST['removeTag'])){
        $sql = "DELETE FROM tag_List WHERE tagListID=".$_POST['tagListid']."";
        $conn->query($sql);
        header("Refresh:0");
    }

    if(isset($_POST['createTag'])){
        $createQuery = "INSERT INTO tag (tagName, tagType) VALUES ('$_POST[tagName]','$_POST[type]')";
        $conn->query($createQuery); 
        header("Refresh:0");
    }

    if(isset($_POST['addTag'])){
        $addQuery = "INSERT INTO tag_List (itemID, tagID) VALUES ('$itemID','$_POST[id]')";
        $conn->query($addQuery);
        header("Refresh:0");
    }

    if(isset($_POST['Delete'])){
        $sql = "DELETE FROM item WHERE itemID=".$_POST['id']."";

        if ($conn->query($sql) === TRUE) {
            echo '<div class="jumbotron d-flex justify-content-center"> <h1>Deleted Successfully</h1></div>';
        } else {
            echo '<div class="jumbotron d-flex justify-content-center"> <h1>"Error: " . $sql . "<br>" . $conn->error</h1>  </div>';
        }
    }
?>