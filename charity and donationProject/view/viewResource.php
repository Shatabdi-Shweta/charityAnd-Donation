<?php
    include_once '../model/educationalResource.php';

    // which resource to show using GET method
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    }

    // get that particular resource from database
    $resource = viewResourceForId($id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educational Resource</title>
    <link rel="stylesheet" href="../assets/CSS/style.css">
</head>
<body>
    <h1><?=$resource[0]['resource_title']?></h1>
    <h4>Category: <?=$resource[0]['category']?></h4>
    <img src="<?=$resource[0]['thumbnail']?>" alt="" width="600" height="400">
    <br><br><br>
    <?=$resource[0]['description']?>
    <br><br><br>
    <a href="home.php"><button>Return Home</button></a>
</body>
</html>