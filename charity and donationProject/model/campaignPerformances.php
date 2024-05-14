<?php
    require_once('db.php');

    function ongoing_campaign() {
        $conn = dbConnection();
        $sql = "select * from campaign_performances limit 1";
        $result = mysqli_query($conn,$sql);
        $ongoingCampaign = [];
        while($recent = mysqli_fetch_assoc($result)){
            array_push($ongoingCampaign,$recent);
        }
        return $ongoingCampaign;
    }
?>