
<?php
/*
session_start();
if (!isset($_SESSION['loggedinuser']))
{   
    $_SESSION['backURL'] = $_SERVER['REQUEST_URI'];
    header("Location: login.php");
}
*/
session_start();
$_SESSION['backURL'] = 'index.php';
?>
<!DOCTYPE HTML>
<html>
<body>
    <form action="login.php" method="POST">  
        <button type="submit">Forward</button>
    </form>
</body>
</html>