<?php  

    session_start();

    session_unset();

    session_destroy();
echo'<script type="text/javascript">
                alert("Se cerro de forma exitosa");
                window.location.href="index.php";
                </script>';
    header('Location: /swappweb');
    
?>