<?php
    require_once('db.php');

    function recent_donation() {
        $conn = dbConnection();
        $sql = "select * from donor_details limit 1";
        $result = mysqli_query($conn,$sql);
        $recentDonation = [];
        while($recent = mysqli_fetch_assoc($result)){
            array_push($recentDonation,$recent);
        }
        return $recentDonation;
    }

    function edit_donor($jsonData) {
        $jsonData = json_decode($jsonData,true);

        $SL = $jsonData['serial'];
        $Donor_name = $jsonData['donor_name'];
        $recent_donation= $jsonData['recent_donation'];
        $donation_date = $jsonData['donation_date'];
        $total_donation = $jsonData['total_donation'];
        $contact_info = $jsonData['contact_info'];

        $conn = dbConnection();
        $query = "UPDATE donor_details set  donor_name='{$Donor_name}', recent_donation='{$recent_donation}', 
                donation_date='{$donation_date}', total_donation='{$total_donation}', contact_information='{$contact_info}' where serial='{$SL}'";
        $data = mysqli_query($conn, $query);

        echo $data;
    }
?>