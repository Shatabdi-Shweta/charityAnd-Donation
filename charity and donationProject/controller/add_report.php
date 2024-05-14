<?php
    $donor_details=$_REQUEST['donor_details'];
    $campaign_performance=$_REQUEST['campaign_performance'];

    if($donor_details == "" || $campaign_performance == ""){
        echo "required selecting field";
    }else{
        header('location:../view/reportingAndAnalytics.php');
    }
?>