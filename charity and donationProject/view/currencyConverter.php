<?php 
    require_once '../controller/sessionCheck.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency Converter</title>
    <link rel="stylesheet" href="../assets/CSS/style.css">
    <script src="../assets/JS/script.js"></script>
</head>
<body>
    <!-- <form action="../controller/currencyConverter.php" method="post"> -->
        <fieldset class="field">
        <p id="errorMsg"></p>
            <legend>Currency Converter</legend>
            <label for="from">From:</label>
            <select name="fromCur" id="from">
                <option value="usd">USD</option>
                <option value="inr">INR</option>
            </select>
            &nbsp; &nbsp;
            <label for="to">To:</label>
            <select name="toCur" id="to">
                <option value="bdt">BDT</option>
            </select>
            <br><br>
            Amount:
            <input type="text" name="amount" id="amount">
            <br><br>
            <input type="submit" value="Convert" onclick="currencyConverter()">
        </fieldset>
    <!-- </form> -->
    <br>
    <h3>Have Any Issue?</h3>
    <a href="contact.php" ><button>Contact Support</button></a>
    <a href="home.php"><button>Return Home</button></a>
    
</body>
</html>