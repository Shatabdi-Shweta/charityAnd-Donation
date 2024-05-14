<?php
    require_once '../controller/sessionCheck.php';
    include_once '../controller/showEvent.php';

    $resource = all_resources();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educational Resources</title>
</head>
<body>
    
<h1>Event List</h1>
    
    
    <?php for($i=0; $i<count($resource); $i++){?>
        <img src="<?=$resource[$i]['thumbnail']?>" alt="thumbnail" width="300" height="300">
        <h2><a href= "viewResource.php?id=<?=$resource[$i]['resource_id']?>"><?=$resource[$i]['resource_title']?></a></h2>
        <hr>
        <br><br>
        
    <?php } ?>
</body>
</html>