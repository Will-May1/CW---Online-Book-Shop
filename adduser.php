<?php
header("location: newuser.php");
//print_r($_POST);
include_once("connection.php");//import equivalent!
if($_POST["AccTyp"]=="1"){
    $AccountType=1;
}else{
    $AccountType=0;
}

//Hashes password for protection
$hashedpassword=password_hash($_POST["Password"],PASSWORD_DEFAULT);
echo($hashedpassword);

//Places provided data into variables for insertion
try{
    $stmt=$conn->prepare("INSERT INTO tblusers 
    (UserID,Username,Password,PostalAddress,BillingAddress,AccountType)
    VALUES
    (NULL,:Username,:Password,:PostalAddress,:BillingAddress,:AccountType)
    ");
    $stmt->bindParam(":Password", $hashedpassword);
    $stmt->bindParam(":Username", $_POST["Username"]);
    $PostalAddress=($_POST["HouseNum"]+'/'+$_POST["StreetName"]+'/'+$_POST["City"]+'/'+$_POST["Postcode"]+'/'+$_POST["County"]+'/'+$_POST["Country"]);
    $stmt->bindParam(":PostalAddress", $PostalAddress);

    //Checks if billing address same as Postal Address (1) or not (0)
    if($_POST["BllAdd"]=="1"){
        $BillingAddress=$PostalAddress;
    }else{
    $BillingAddress=($_POST["BllAddHouseNum"]+'/'+$_POST["BllAddStreetName"]+'/'+$_POST["BllAddCity"]+'/'+$_POST["BllAddPostcode"]+'/'+$_POST["BllAddCounty"]+'/'+$_POST["BllAddCountry"]);
}
    $stmt->bindParam(":BillingAddress", $BillingAddress);
    $stmt->execute();
}
catch(PDOException $e)
{
    echo("error: " . $e->getMessage());
}

?>
