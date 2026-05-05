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

$hashedpassword=password_hash("password",PASSWORD_DEFAULT);
echo($hashedpassword);

$stmt=$conn->prepare("INSERT INTO tblusers 
(UserID,Username,Password,PostalAddress,BillingAddress,AccountType)
VALUES
(NULL,'Buyer1',:Password,'558-OundleRoad-PE84JQ-UK', '558-OundleRoad-PE84JQ-UK',0),
(NULL,'Seller1',:Password,'557-OundleRoad-PE84JQ-UK', '557-OundleRoad-PE84JQ-UK',1),
(NULL,'Buyer2',:Password,'556-OundleRoad-PE84JQ-UK', '556-OundleRoad-PE84JQ-UK',0),
(NULL,'Seller2',:Password,'555-OundleRoad-PE84JQ-UK', '555-OundleRoad-PE84JQ-UK',1)
");
$stmt->bindParam(":Password", $hashedpassword);
$stmt->execute();

// create products table
$stmt=$conn->prepare("DROP TABLE IF EXISTS tblproducts;
CREATE TABLE tblproducts
(ProductID INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
ProdDescription VARCHAR(5000),
SellerID INT(3) NOT NULL,
Stock INT(4) NOT NULL,
PRICE DECIMAL(5, 2) NOT NULL
);
");
$stmt->execute();
echo("<br>tblproducts created<br>");

$stmt=$conn->prepare("INSERT INTO tblproducts 
(ProductID,ProdDescription,SellerID,Stock,PRICE)
VALUES
(NULL,'Book1',1,10,10.99),
(NULL,'Book2',2,14,6.55),
(NULL,'Book3',3,6,9.80),
(NULL,'Book4',4,3,110.02)
");
$stmt->execute();

// create categories table
$stmt=$conn->prepare("DROP TABLE IF EXISTS tblcategories;
CREATE TABLE tblcategories
(CategoryID INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Category VARCHAR(25) NOT NULL
);
");
$stmt->execute();
echo("tblcategories created<br>");

$stmt=$conn->prepare("INSERT INTO tblcategories
(CategoryID, Category)
VALUES
(NULL, 'Fantasy'),
(NULL, 'Sci-Fi'),
(Null, 'Steampunk'),
(NULL, 'Romance')
");
$stmt->execute();

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

$stmt=$conn->prepare("INSERT INTO tblprodHasCat
(ProductID, CategoryID)
VALUES
(1, 1),
(1, 2),
(1, 4),
(2, 3),
(3, 1),
(3, 4),
(4, 2)
");
$stmt->execute();

// create Reviews table
$stmt=$conn->prepare("DROP TABLE IF EXISTS tblreviews;
CREATE TABLE tblreviews
(ProductID INT(4) NOT NULL,
UserID INT(4) NOT NULL,
Rating INT(1),
Review VARCHAR(5000),
RevDate VARCHAR(14),
PRIMARY KEY (ProductID, UserID)
);
");
$stmt->execute();
echo("tblreviews created<br>");

$stmt=$conn->prepare("INSERT INTO tblreviews
(ProductID, UserID, Rating, Review, RevDate)
VALUES
(1, 1, 5, 'Very good book. Highly reccomend', '12/02/24-12:24'),
(2, 3, 3, 'It was alright. Would reccomend if on sale', '24/06/25-14:59'),
(3, 4, 1, 'Awful book, do not buy', '21/04/26-11:25'),
(4, 2, 4, 'Good book, well written. Good characters with lots of development', '04/11/18-03:09')
");
$stmt->execute();

// create Basket table
$stmt=$conn->prepare("DROP TABLE IF EXISTS tblbasket;
CREATE TABLE tblbasket
(BasketID INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
UserID INT(4) NOT NULL,,
CreationDate VARCHAR(8) NOT NULL,
Paid BOOLEAN NOT NULL DEFAULT 0,
Processed BOOLEAN NOT NULL DEFAULT 0,
Dispatched BOOLEAN NOT NULL DEFAULT 0,
Delivered BOOLEAN NOT NULL DEFAULT 0,
Returned BOOLEAN NOT NULL DEFAULT 0
);
");
$stmt->execute();
echo("tblbasket created<br>");

$stmt=$conn->prepare("INSERT INTO tblbasket
(BasketID, UserID, CreationDate, Paid, Processed, Dispatched, Delivered, Returned)
VALUES
(NULL, 1, '12/12/12',1, 1, 0, 0, 0),
(NULL, 2, '20/04/12',1, 1, 1, 1, 0),
(NULL, 3, '21/12/21',0, 0, 0, 0, 0)
");
$stmt->execute();

// create BasketHasItems table
$stmt=$conn->prepare("DROP TABLE IF EXISTS tblbasketHasItems;
CREATE TABLE tblbasketHasItems
(BasketID INT(4) NOT NULL,
ProductID INT(4) NOT NULL,
PRIMARY KEY (BasketID, ProductID)
);
");
echo("addedtestdata");
$stmt->execute();
echo("tblbasketHasItems created<br>");


?>