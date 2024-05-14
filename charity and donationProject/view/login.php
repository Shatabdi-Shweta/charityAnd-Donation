<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in form</title>
    <link rel="stylesheet" href="../assets/CSS/style.css">
    <script src="../assets/JS/script.js"></script>
</head>
<body>
    <!-- <form method="get" action="../controller/logInCheck.php" enctype=""> -->
    <table border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td>
          <fieldset class="field">
          <p id="errorMsg"></p>

            <legend><h3>Log In</h3></legend>
            Username:<input type="text" name="username" id="username" value=""><br>
            Password:<input type="password" name="password" id="password" value=""><br>
                    <input type="submit" name="submit" value="submit" onclick="logIn()">
        
        <p>Don't have an account? <a href="signup.php">Sign up now</a></p>
        </fieldset>
        </td>
      </tr>
    </table>
    <!-- </form> -->
</body>
</html>