<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up form</title>
    <link rel="stylesheet" href="../assets/CSS/style.css">
    <script src="../assets/JS/script.js"></script>
</head>
<body>
  <!-- <form method="post" action="../controller/signupCheck.php" enctype=""> -->
  <form
              name="registration"
              method="post"
              action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"
              enctype="multipart/form-data"
              onsubmit="signUp()"
            >
    <table border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td>
          <fieldset class="field">
          <p id="errorMsg"></p>

            <legend><h3>REGISTRATION</h3></legend>

            
            Name<br /><input type="text" name="username" id="username" value=""/><br />
            Email<br /><input type="email" name="email" id="email" value=""/><br />
            Password<br /><input
              type="password"
              name="password"
              id="password"
              value=""
            /><br />
            Confirm Password<br /><input
              type="password"
              name="confirm_password"
              id="password1"
              value=""
            /><br />
            <label for="user-type">User Type</label>
            <hr />
            <input type="radio" name="user-type" id="user_type" value="Donor" checked >Donor</input>
            <input type="radio" name="user-type" id="user_type" value="Admin" >Admin</input>
            <input type="radio" name="user-type" id="user_type" value="Volunteer">Volunteer</input>
            <input type="radio" name="user-type" id="user_type" value="User">User</input>
            <hr />
            <input type="submit" name="submit" value="Sign Up"/>
            
            <p>Already have and account? <a href="login.php">Login here</a>

          </fieldset>
        </td>
      </tr>
    </table>
  </form>
    
  <!-- </form> -->
</body>
</html>