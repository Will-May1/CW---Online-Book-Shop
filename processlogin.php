<?php
session_start();

array_map("htmlspecialchars", $_POST); //sanitises inputs so no html can be injected
include_once("connection.php");//import equivalent!

try{
    $stmt=$conn->prepare("SELECT * from tblusers WHERE Username=:Username;");
    $stmt->bindParam(":Username", $_POST["username"]);
    $stmt->execute(); 

    if ($stmt->rowCount() == 0) {
        echo("Invalid username.");
        header("location: login.php"); 
    }else{
        #check password ok..
        while($row=$stmt->fetch(PDO::FETCH_ASSOC))
        {
            $hashed=$row["Password"];
            $attempt=$_POST["password"];


            if (password_verify($attempt,$hashed)){
                $_SESSION["loggedinuser"]=$row["Username"];
                $_SESSION["admin"]=$row["Role"];
                if (!isset($_SESSION['backURL'])){
                    $backURL= "install.php"; //Sets a default destination if no BackURL set (parent dir)
                }else{
                    $backURL=$_SESSION['backURL'];
                }
                unset($_SESSION['backURL']);
                header('Location: ' . $backURL);
            }else{
                header('Location: login.php');
            }
        }
    }
}
catch(PDOException $e)
{
    echo("error: " . $e->getMessage());
}
?>