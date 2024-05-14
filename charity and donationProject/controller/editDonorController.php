<?php
    include_once '../model/donorDetailsModel.php';

    $jsonData = $_REQUEST['donordata'];
    
    $result = edit_donor($jsonData);

    echo $result;
?>