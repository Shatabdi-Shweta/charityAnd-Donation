<?php
    require_once '../controller/sessionCheck.php';
    include_once('../model/reportAndAnalysisModel.php');
    $campaigns = show_campaign_list();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Canpaign Performances</title>
    <link rel="stylesheet" href="../assets/CSS/style.css">
</head>
<body>
    <fieldset class="field">
    <table border=1>
        <tr>
            <td>Serial</td>
            <td>Campaign_name</td>
            <td>Starting_date</td>
            <td>Ending_date</td>   
            <td>Total_funding</td>
            <td>Total_response</td>     
        </tr>

        <?php for($i=0; $i<count($campaigns); $i++){?>
            <tr>
                <td><?= $campaigns [$i] ['serial'] ?></td>
                <td><?php echo $campaigns [$i]['campaign_name']?></td>
                <td><?php echo $campaigns [$i]['starting_date']?></td>
                <td><?php echo $campaigns [$i]['ending_date']?></td>
                <td><?php echo $campaigns [$i]['total_funding']?></td>
                <td><?php echo $campaigns [$i]['total_response']?></td>
            </tr>
            <?php
        }?>
       
    </table> <br>
    <a href="home.php"><button>Return Home</button></a>
    </fieldset>
</body>
</html>