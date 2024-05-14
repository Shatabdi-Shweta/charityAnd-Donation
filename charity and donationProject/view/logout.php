<?php

    setcookie('flag','true',time()-10,'/');
    header('location:login.php');
?>