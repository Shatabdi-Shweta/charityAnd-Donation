<?php 
    require_once '../controller/sessionCheck.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report and Analytics</title>
    <link rel="stylesheet" href="../assets/CSS/style.css">
</head>
<body>

    <h2>Report and Analytics</h2>
    <form action="add_report.php" method="post">
        <input type="radio" name="donor_details" id="donor_details" value="donor_details">
       <a href="donorslist.php">Donor Details</a><br>
       <input type="radio" name="campaign_performance" id="campaign_performance" value="campaign_performance">
       <a href="campaignList.php">Campaign Performance</a>  
    </form>
    <br>
    <a href="home.php"><button>Return Home</button></a>
</body>
</html>