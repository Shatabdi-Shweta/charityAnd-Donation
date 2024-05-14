<?php
require_once '../controller/sessionCheck.php';
include_once('../Model/project.php');
$projects = show_project_details();
?>

<html>
<head>
<title>Project list</title>
<link rel="stylesheet" href="../assets/style.css">
</head>
<body>

<div class="list">
<h2>List Of Projects</h2>
<table border=1>
    <tr>
        
        <td>Project ID</td>   
        <td>Project Name</td>
        <td>Start Date</td>
        <td>End Date</td>
        <td>Category</td>
      
       
    <tr>
<?php for($i=0; $i<count($projects); $i++){?>
    <tr>
        
        <td><?php echo $projects[$i]['id']?></td>
        <td><?php echo $projects[$i]['name']?></td>
        <td><?php echo $projects[$i]['startDate']?></td>
        <td><?php echo $projects[$i]['endDate']?></td>
        <td><?php echo $projects[$i]['category']?></td>
    <tr>
<?php } ?>

</table>
<div class="bottom-links">
        <a href="projectListing.php">Back</a> | <a href="logout.php">Logout</a>
</div>
</div>
</body>
</html>
