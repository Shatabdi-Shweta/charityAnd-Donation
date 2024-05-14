<?php

    require_once('../model/projectModel.php');

    $jsondata = $_REQUEST["projectdata"];
    $jsondata = json_decode($jsondata,true);

    $project_name=$jsondata['name'];
    $start_Date=$jsondata['start'];
    $end_Date=$jsondata['end'];
    $category = $jsondata['category'];

    if($name == "" || $startDate =="" || $endDate == "" || $category == ""){
        echo " required inputs";
    }else{
        $project=['name'=>$name,'start'=>$startDate,'end'=>$endDate,'category'=>$category];
        $status=createProject(json_encode($project));
        if($status){
            // header('location:../View/projectListing.php');
            echo $status;
            
        }else{
            echo "please try again";
        }
    }

    // $donor_details=$_REQUEST['donor_details'];
    // $campaign_performance=$_REQUEST['campaign_performance'];

    // if($donor_details == "" || $campaign_performance == ""){
    //     echo "required selecting field";
    // }else{
    //     header('location:../view/reportingAndAnalytics.php');
    // }
?>