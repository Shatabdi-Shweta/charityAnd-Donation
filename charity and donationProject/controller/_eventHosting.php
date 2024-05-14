<?php
    require_once('../model/eventModel.php');

    $jsondata = $_REQUEST["eventdata"];
    $jsondata = json_decode($jsondata,true);

    $resource_title = $jsondata['resource_title'];
    $thumbnail = "";
    $description = $jsondata['description'];
    $category = $jsondata['category'];
    $owner ="admin";

    $name = "thumbnail";
    $imageName = $_FILES["thumbnail"]["name"];
    $imageSize = $_FILES["thumbnail"]["size"];
    $tmpName = $_FILES["thumbnail"]["tmp_name"];

    // Image validation
    $validImageExtension = ['jpg', 'jpeg', 'png'];
    $imageExtension = explode('.', $imageName);
    $imageExtension = strtolower(end($imageExtension));
    
    if (!in_array($imageExtension, $validImageExtension)){
        echo "Invalid image extension!";
        echo $imageName;
        echo $imageExtension;
    }

    elseif ($imageSize > 5000000){
        echo "File is too large!";
    }

    // if image is valid, save this
    else {
        $newImageName = "../media/" . $name . " - " . date("Y.m.d") . " - " . date("h.i.sa"); // Generate new image name
        $newImageName .= '.' . $imageExtension;
        $thumbnail = $newImageName;
        move_uploaded_file($tmpName, '../media/' . $newImageName);
    }

    // null validation
    if($resource_title == "" || $thumbnail == "" || $description == "" || $category == "" || $owner == ""){
        echo "Required each field!";
    }
    // if no validation error, add resource to database
    else{
        $event = ['resource_title'=>$resource_title,'thumbnail'=>$thumbnail,'description'=>$description,'category'=>$category];
        $status = add_request_event(json_encode($event));
        
        if ($status) {
            // header('location:../view/eventHosting.php');
            echo $status;
        } else {
            echo "Failed";
        }
    }
?>