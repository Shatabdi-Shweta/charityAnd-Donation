<?php
    $SL= $_GET['serial'];

?>

<html lang="en">
<head>
    <title>Edit Donor</title>
    <link rel="stylesheet" href="../assets/CSS/style.css">
    <script src="../assets/JS/script.js"></script>
</head>
<body>
        <!-- <form action="../controller/editDonorController.php" method="post"> -->
            <!-- <form name="editDonor"
              method="post"
              action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"
              enctype="multipart/form-data"
              onsubmit="editDonor()" > -->
              
            <fieldset class="field">
            <p id="errorMsg"></p>
            Serial: <input type="number" name='serial' value="<?=$SL?>" id="serial"/> <br>
            Donor_name: <input type="text" name='donor_name' value="" id="donor_name"/> <br>
            Recent_donation: <input type="number" name='recent_donation' value="" id="recent_donation"/> <br>
            Donation_date: <input type="date" name='donation_date' value="" id="donation_date"/> <br>
            Total_donation: <input type="number" name='total_donation' value="" id="total_donation"/> <br>
            Contact_information: <input type="email" name='contact_information' value="" id="contact_information"/> <br>
            
            <input type="submit" name="submit" value="update" onclick="editDonor() "/> 
            <a href="home.php"><button>Return Home</button></a>
            </fieldset>
            <!-- </form> -->
        <!-- </form> -->
</body>
</html>