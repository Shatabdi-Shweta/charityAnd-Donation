<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educational Resource</title>
    <link rel="stylesheet" href="../assets/CSS/style.css">
    <script src="../assets/JS/script.js"></script>
</head>
<body>
    <!-- <form action="../controller/add_resource.php" method="post" enctype="multipart/form-data"> -->
    <form 
            name="Resource"
            method="post"
            action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"
            enctype="multipart/form-data"
            onsubmit="addResource()"
            >
        <fieldset class="field">
            <legend>Add Educational Resource</legend>

            <p id="errorMsg"></p>

            <label for="resource_title">Resource Title:</label><br>
            <input type="text"  name="resource_title" id="resource_title" value=""><br><br>

            <label for="thumbnail">Thumbnail Image URL:</label><br>
            <input type="file" name="thumbnail" id="thumbnail"><br><br>

            <label for="description">Description:</label><br>
            <textarea name="description" id="description" cols="80" rows="10"></textarea><br>

            <br><label for="category">Category:</label>
            <select name="category" id="category" value="">
                <option value="food">Food</option>
                <option value="medical_care">Medical Care</option>
                <option value="education">Education</option>
            </select><br><br>
            <input type="submit" name="submit" value="Add Resource" >
            
        </fieldset>
        <a href="home.php"><button>Return Home</button></a>
    </form>

    
</body>
</html>