<?php 

    setcookie('flag', 'true', time()-10, '/');
    header('location: ../view/login.php');
?>