<?php
    require 'DB.php';
    
    $message = '';

    if (!empty($_POST['email']) && !empty($_POST['password'])){
        $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
        $stmt = $conn->prepare($sql);
        $stmt-> bindParam (':email',$_POST['email']);
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $stmt-> bindParam (':password', $password);

        if ($stmt->execute()){
            $message = 'Successfully created new user!!';
        } else {
            $message = 'Sorry, an error has ocurred!!';
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sign up</title>
    <link href="https://fonts.googleapis.com/css?family=Kalam&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Assets/CSS/style.css?v=<?php echo time(); ?>"/>
</head>
<body>
    <?php require 'Partials/Header.php'?>
    <?php if (!empty ($message)): ?>
    <p><?= $message ?></p>
    <?php endif; ?>
    <h1>Sign Up</h1>
    <span>or <a href="Login.php">Login</a></span>
    <form action="Signup.php" method="post">
        <input type="text" name="email" placeholder="Enter your Email">
        <input type="password" name="password" placeholder="Enter your password">
        <input type="password" name="confirm_password" placeholder="Confirm your password">
        <input type="submit" value="Sign Up"> 
    </form>
</body>
</html>