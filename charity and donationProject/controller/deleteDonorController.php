<?php
    include_once '../model/reportAndAnalysisModel.php';

    $SL = $_REQUEST["serial"];

    $result = deleteDonor($SL);
    if($result=TRUE){
        echo "success";
    }else{
        echo "failed";
    }
?>