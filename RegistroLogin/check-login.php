<?php
session_start();

if (isset($_SESSION['user_id'])){
		header('Location: http://localhost/swappweb/home/index.php');
    }
// Connection info. file
include 'conexion.php';	
			
// Connection variables
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// data sent from form login.html 
$email = $_POST['email']; 
$password = $_POST['password'];

// Query sent to database
$result = mysqli_query($conn, "SELECT id_usuario, nombres, apellidos, email, password FROM users WHERE email = '$email'");

// Variable $row hold the result of the query
$row = mysqli_fetch_assoc($result);

// Variable $hash hold the password hash on database
$hash = $row['password'];

/* 
password_Verify() function verify if the password entered by the user
match the password hash on the database. If everything is OK the session
is created for one minute. Change 1 on $_SESSION[start] to 5 for a 5 minutes session.
*/
if (password_verify($_POST['password'], $hash)) {	
    
    $_SESSION['loggedin'] = true;
    $_SESSION['name'] = $row['nombres'];
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (1 * 60) ;						
    $_SESSION['user_id'] =$row['id_usuario'];

    header('Location: http://localhost/swappweb/home/index.php');

} else {
    //echo "<div class='alert alert-danger mt-4' role='alert'>Email or Password are incorrects!
    //<p><a href='login.php'><strong>Please try again!</strong></a></p></div>";		
    echo'<script type="text/javascript">
    alert("Contraseña Incorrecta");
    window.location.href="login.php";
    </script>';           
}	
?>
