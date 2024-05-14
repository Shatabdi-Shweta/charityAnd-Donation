<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="../assets/CSS/style.css">
    <script src="../assets/JS/script.js"></script>
</head>
<body>
    <!-- <form action="../controller/contact.php" method="post"> -->
        <fieldset class="field">
            <p id="errorMsg"></p>

            <legend>Contact</legend>
            Your Email:
            <input type="text" name="email" id="email">
            <br><br>
            Description:
            <textarea name="description" cols="30" rows="10" id="description"></textarea>
            <br><br>
            <input type="submit" value="Submit" onclick="contact()">
        </fieldset>    
    <!-- </form> -->
    <br>
    <a href="home.php"><button>Return Home</button></a>
</body>
</html>