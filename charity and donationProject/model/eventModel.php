<?php
    require_once('db.php');

    function add_request_event($event){
        $conn = dbConnection();
        $event = json_decode($event);
        $sql = "INSERT INTO event (resource_title,thumbnail,description,category,owner) values
         ('{$event->resource_title}','{$event->thumbnail}','{$event->description}','{$event->category}','{$event->owner}')";
        $result = mysqli_query($conn,$sql);
        if($result){
            return true;
        }else{
            return false;
        }
    }

    // all resources from database
    function all_resource() {
        $conn = dbConnection();
        $sql = "select * from event";
        $result = mysqli_query($conn,$sql);
        
        $resources= [];

        while($resource = mysqli_fetch_assoc($result)){
            array_push($resources, $resource);
        }

        return $resources;
    }

    // particular resource from database
    function viewResourceForId($id) {
        $conn = dbConnection();
        $sql = "select * from event where resource_id='{$id}'";
        $result = mysqli_query($conn,$sql);
        
        $resources= [];

        while($resource = mysqli_fetch_assoc($result)){
            array_push($resources, $resource);
        }

        return $resources;
    }
?>