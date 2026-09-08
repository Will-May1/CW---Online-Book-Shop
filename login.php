<!DOCTYPE HTML>
<html>
<head>          
    <title>Login</title>
</head>

<body>
    <form action="processlogin.php" method="POST">
        Username:<input type="text" name="username"><br>
        
        Password:<input type="password" name="password"><br>
        
        <input type="submit" value="Login">
    </form>
    
    <form action="index.php" method="post">
        <button type="submit" name="returnButton">Back</button>
    </form>

</body>
</html>