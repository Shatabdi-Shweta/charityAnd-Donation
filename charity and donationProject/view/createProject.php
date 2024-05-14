<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/style.css">
    <script src="../assets/JS/script.js"></script>
</head>
<body>
   
<div class="create-project">
    <h2>Create Project</h2>
    <!-- <form method="post" action="../controller/projectCheck.php" enctype=""> -->
    <form
              name="project"
              method="post"
              action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"
              enctype="multipart/form-data"
              onsubmit="createProject()"
            >
        Project Name <br><input type="text"name="name" value="" id="name"/><br>

        Starting Date <br /><input type="date"name="start" value="" id="start"/><br />

        Ending Date <br /><input type="date" name="end" value="" id="end"/><br />

        Category <br>
        <select for="category">Category</label>
            <option name="category" value="Donation" id="category">Donation</option>
            <option name="category" value="Fund" id="category">Fund</option>
            <option name="category" value="None" id="category">None</option>
            <!-- Add more categories if needed -->
        </select>

        <input type="submit" value="Create">
    </form>
    <div class="bottom-links">
        <a href="#">Back</a> | <a href="#">Logout</a>
    </div>
</div>





<!-- <form method="post" action="../controller/projectCheck.php" enctype="">
    <table border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td>
          <fieldset>
            <legend><h3>Create Project</h3></legend>
            Project Name<br /><br />
            Starting Date<br /><input type="text"name="start" value="" /><br />
            Ending Date<br /><input type="text"name="end" value="" /><br />
            Category<br /><input type="text"name="category" value="" /><br />
        
            <input type="submit" name="submit" value="Create" />
            
            <a href="projectListing.php">Back</a><br>
            <a href="logout.php">Logout</a>
          </fieldset>
        </td>
      </tr>
    </table>
  </form> -->
</body>
</html>