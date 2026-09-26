<!DOCTYPE HTML>
<html>
<head>          
    <title>Login</title>
</head>

<body>
    <?php
    session_start();
    if (isset($_SESSION["UserError"] )) {
        echo($_SESSION["UserError"]);
        unset($_SESSION['UserError']);
    }
    ?>
    <form action="processlogin.php" method="POST">
        Username:<input type="text" name="username"><br>
        
        Password:<input type="password" name="password"><br>
        
        <input type="submit" value="Login">
    </form>
    <form action="processback.php" method="POST">
        <button type="submit" name="returnButton">Back</button>
    </form>
</body>
</html>