<?php
    $email = $_REQUEST['email'];
    $description = $_REQUEST['description'];

    if (empty($email) || empty($description)) {
        echo 'Please fill up all the fields!';
    }
    else {
        echo 'We will reply to you as soon as possible.';
    }
?>