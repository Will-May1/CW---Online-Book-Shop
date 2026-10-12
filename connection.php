<?php
$servername="localhost";
$username="root";
$password="root";
$dbname="Bookshop";
try{
    $conn= new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if ($_SESSION['showconnect'] != 0) {
        echo("Connected successfully<br>");
    }   
}
catch(PDOException $e){
    echo("Connection failed: " . $e->getMessage());
}
?>