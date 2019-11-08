<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Kalam&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Assets/CSS/style.css?v=<?php echo time(); ?>"/>
    <title>Login</title>
</head>
<body>
    <?php require 'Partials/Header.php'?>
    <h1>Login</h1>
    <span>or <a href="Signup.php">Sign Up</a></span>

    <form action="Login.php" method="post">
        <input type="text" name="email" placeholder="Enter your Email">
        <input type="password" name="password" placeholder="Enter your password">
        <input type="submit" value="Login"> 
    </form>
</body>
</html>