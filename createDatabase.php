<?php
$conn = new mysqli('localhost', 'root', '', '');

$conn->query("CREATE DATABASE SariBase");
$select = $conn->select_db('SariBase');

$employee = "CREATE TABLE Employee (
    employeeID int (50) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY ,
    employeeLevelID int (50) UNSIGNED NOT NULL ,
    branchID int (50) UNSIGNED NOT NULL,

    firstname varchar (50) NOT NULL,
    lastname varchar (50) NOT NULL,
    contactNumber varchar (50) NOT NULL,
    password varchar(50) NOT NULL,
    
    CONSTRAINT PK_employeeLevelID Foreign KEY (employeeLevelID) References EmployeeLevel(employeeLevelID),
    CONSTRAINT PK_branchID Foreign KEY (branchID) References Branch(branchID)
    )";
    
$employee_level = "CREATE TABLE EmployeeLevel (
    employeeLevelID int (50) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY ,

    levelName ENUM('Admin', 'Manager', 'Employee') NOT NULL,
    levelDescription varchar(150) NOT NULL,
    user_type ENUM('Admin', 'User') NOT NULL)"; 

$branch = "CREATE TABLE Branch (
    branchID int (50) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY  ,

    branchName varchar (50) NOT NULL,
    branchAddress varchar (50) NOT NULL,
    branchManager varchar (50) NOT NULL,
    branchType varchar (50) NOT NULL,
    branchContact varchar (25) NOT NULL)";

$branch_inventory = "CREATE TABLE Branch_Inventory (
    inventoryID int (50) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY ,
    branchID int (50) UNSIGNED NOT NULL ,
    itemID int (50) UNSIGNED NOT NULL ,

    itemQuantity int (100) UNSIGNED NOT NULL ,
    itemStatus ENUM('In-Stock', 'Out of Stock')  NOT NULL ,
    dateUpdated dateTime  NOT NULL ,

    -- CONSTRAINT PK_branchID Foreign KEY (branchID) References Branch(branchID),
    CONSTRAINT PK_itemID Foreign KEY (itemID) References Item(itemID)
    )";

$item = "CREATE TABLE Item (
    itemID int (50) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY ,
    tagListID int (50) UNSIGNED NOT NULL ,
    brandID int (50) UNSIGNED NOT NULL ,
    supplierID int (50) UNSIGNED NOT NULL ,

    itemName varchar (100) NOT NULL ,
    itemDescription varchar (150) NOT NULL ,
    itemPrice float(50) UNSIGNED NOT NULL ,
    sellingPrice float(50) UNSIGNED NOT NULL ,
    unitCount varchar (15) NOT NULL ,
    employeeNote varchar (100) NOT NULL ,

    CONSTRAINT PK_tagListID Foreign KEY (tagListID) References TagList(tagListID),
    CONSTRAINT PK_brandID Foreign KEY (brandID) References Brand(brandID),
    CONSTRAINT PK_supplierID Foreign KEY (supplierID ) References Supplier(supplierID )
    )";

$tagList = "CREATE TABLE TagList(
    tagListID int (50) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY ,
    -- itemID int (50) UNSIGNED NOT NULL ,
    tagID int (50) UNSIGNED NOT NULL ,

    -- CONSTRAINT PK_itemID Foreign KEY (itemID) References Item(itemID), /* where */
    CONSTRAINT PK_tagID Foreign KEY (tagID) References Tag(tagID)
    )";

$tag = "CREATE TABLE Tag(
    tagID int (50) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY ,

    tagName varchar (50) NOT NULL 
    )";

$brand = "CREATE TABLE Brand(
    brandID int (50) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY ,

    brandName varchar (50) NOT NULL,
    brandDescription varchar (150) NOT NULL
    )";

$supplier = "CREATE TABLE Supplier(
    supplierID int (50) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY ,

    supplierName varchar (50) NOT NULL,
    supplierAddress varchar (50) NOT NULL,
    supplierContact varchar (50) NOT NULL
    )";

$request = "CREATE TABLE Request(
    requestID int (50) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY ,
    branchID int (50) UNSIGNED NOT NULL ,
    employeeID int (50) UNSIGNED NOT NULL ,
    -- requestListID int (50) UNSIGNED NOT NULL ,

    dateRequested dateTime NOT NULL,
    terms varchar (50) NOT NULL ,
    paymentType ENUM('Cash', 'Credit') NOT NULL ,
    requestStatus ENUM('Delivered', 'Received') NOT NULL 


    -- CONSTRAINT PK_employeeID Foreign KEY (employeeID) References Employee(employeeID),
    -- CONSTRAINT PK_branchID Foreign KEY (branchID) References Branch(branchID)
    -- CONSTRAINT PK_requestListID Foreign KEY (requestListID) References RequestList(requestListID)
    )";

    if($conn->query($employee_level) === TRUE && 
       $conn->query($branch) === TRUE && 
       $conn->query($employee) === TRUE  && 
       $conn->query($tag) === TRUE && 
       $conn->query($tagList) === TRUE  && 
       $conn->query($brand) === TRUE && 
       $conn->query($supplier) === TRUE && 
       $conn->query($item) === TRUE &&
       $conn->query($request) === TRUE && 
       $conn->query($branch_inventory) === TRUE){   
        echo "Inserted a table <br>";
    }
    else{
        echo "Not inserted".$conn->error;
    }
?>