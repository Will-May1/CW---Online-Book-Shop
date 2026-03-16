<?php
$servername="localhost";
$username="root";
$password="root";
$conn= new PDO("mysql:host=$servername",$username,$password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql="CREATE DATABASE IF NOT EXISTS Bookshop";
$conn->exec($sql);
$sql="USE Bookshop";
$conn->exec($sql);
echo("DB created successfully<br>");

// create users table
$stmt=$conn->prepare("DROP TABLE IF EXISTS tblusers;
CREATE TABLE tblusers
(UserID INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Username VARCHAR(20) NOT NULL,
Password  VARCHAR(100) NOT NULL,
PostalAddress VARCHAR(50) NOT NULL,
BillingAddress VARCHAR(50) NOT NULL,
AccountType BOOLEAN NOT NULL DEFAULT 0
);
");
$stmt->execute();
echo("tblusers created<br>");

// create products table
$stmt=$conn->prepare("DROP TABLE IF EXISTS tblproducts;
CREATE TABLE tblproducts
(ProductID INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Description VARCHAR(5000),
SellerID INT(3) NOT NULL,
Stock INT(4) NOT NULL,
PRICE DECIMAL(3, 2) NOT NULL
);
");
$stmt->execute();
echo("tblproducts created<br>");

// create categories table
$stmt=$conn->prepare("DROP TABLE IF EXISTS tblcategories;
CREATE TABLE tblcategories
(CategoryID INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Category VARCHAR(25) NOT NULL
);
");
$stmt->execute();
echo("tblcategories created<br>");

// create ProductHasCategory table
$stmt=$conn->prepare("DROP TABLE IF EXISTS tblprodHasCat;
CREATE TABLE tblprodHasCat
(ProductID INT(4) NOT NULL,
CategoryID INT(4) NOT NULL,
PRIMARY KEY (ProductID, CategoryID)
);
");
$stmt->execute();
echo("tblprodHasCat created<br>");

// create Reviews table
$stmt=$conn->prepare("DROP TABLE IF EXISTS tblreviews;
CREATE TABLE tblreviews
(ProductID INT(4) NOT NULL,
UserID INT(4) NOT NULL,
PRIMARY KEY (ProductID, UserID)
);
");
$stmt->execute();
echo("tblreviews created<br>");

// create Basket table
$stmt=$conn->prepare("DROP TABLE IF EXISTS tblbasket;
CREATE TABLE tblbasket
(BasketID INT(5) NOT NULL,
NumofItems INT(2) NOT NULL,
TotalPrice DECIMAL(5, 2) NOT NULL
);
");
$stmt->execute();
echo("tblbasket created<br>");

// create BasketHasItems table
$stmt=$conn->prepare("DROP TABLE IF EXISTS tblbasketHasItems;
CREATE TABLE tblbasketHasItems
(BasketID INT(4) NOT NULL,
ProductID INT(4) NOT NULL,
PRIMARY KEY (BasketID, ProductID)
);
");
$stmt->execute();
echo("tblbasketHasItems created<br>");
?>