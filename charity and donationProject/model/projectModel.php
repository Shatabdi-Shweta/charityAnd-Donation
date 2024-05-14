<?php
    require_once('db.php');

    function login($username,$password){
        $conn = dbConnection();
        $sql = "select * from user where name ='{$username}' and password = '{$password}'";
        $result = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($result);
        if($count == 1){
            return true;
        }else{
            return false;
        }

    }

    function createProject($project){
        $conn = dbConnection();
        $project = json_decode($project);

        $sql = "select * from project where name = '{$project->project_name}'";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);

        if($count == 1){
            echo "project already exist..";
        }else{
        $sql = "insert into project (name, startDate, endDate, category) values 
        ('{$project->project_name}','{$project->start}','{$project->end}','{$project->category}')";
        
        if(mysqli_query($conn, $sql)) {
            return true;
        }else{
            return false;
        }
    }
}
    
    // function show_campaign_list(){
    // $conn = dbConnection();
    // $sql = "select * from campaign_performances";
    // $result = mysqli_query($conn,$sql);
    // $campaigns = [];
    // while($campaign = mysqli_fetch_assoc($result)){
    //     array_push($campaigns,$campaign);
    // }
    // return $campaigns;

    function show_project_details(){
        $conn = dbConnection();
        $sql = "select * from project";
        $result = mysqli_query($conn,$sql);
        $projects= [];
    while($project = mysqli_fetch_assoc($result)){
        array_push($projects, $project);
    }

    return $projects;
}
