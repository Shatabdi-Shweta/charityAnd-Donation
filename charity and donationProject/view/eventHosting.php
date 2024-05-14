<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Hosting</title>
    <link rel="stylesheet" href="../asset/style.css">
    <script src="../assets/JS/script.js"></script>

</head>
<body>
<div class="event-hosting">
    <h2>Event Hosting</h2>
    <!-- <form action="../controller/_eventHosting.php" method="post" enctype="multipart/form-data"> -->
    <form
              name="event"
              method="post"
              action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"
              enctype="multipart/form-data"
              onsubmit="createEvent()"
            >
        <label for="resource_title">Event Title:</label><br>
            <input type="text"  name="resource_title" id="resource_title" value=""><br><br>

            <label for="thumbnail">Thumbnail Image URL:</label><br>
            <input type="file" name="thumbnail" id="thumbnail"><br><br>

            <label for="description">Description:</label><br>
            <textarea name="description" id="description" cols="80" rows="10"></textarea><br>

            <br><label for="category">Category:</label>
            <select name="category" id="category" value="">
                <option name="category" id="category" value="food">Food</option>
                <option name="category" id="category" value="medical_care">Medical Care</option>
                <option name="category" id="category" value="education">Education</option>
            </select><br><br>
            <input type="submit" name="submit" value="Add Event">
    </form>
    <!-- </form> -->
    <div class="bottom-links">
        <a href="#">Back</a> | <a href="eventList.php">Show Events</a>
    </div>
</div>






    <!-- <form action="../controller/_eventHosting.php" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>Event</legend>

            <label for="resource_title">Event Title:</label><br>
            <input type="text"  name="resource_title" id="resource_title" value=""><br><br>

            <label for="thumbnail">Thumbnail Image URL:</label><br>
            <input type="file" name="thumbnail"><br><br>

            <label for="description">Description:</label><br>
            <textarea name="description" id="description" cols="80" rows="10"></textarea><br>

            <br><label for="category">Category:</label>
            <select name="category" id="category" value="">
                <option value="food">Food</option>
                <option value="medical_care">Medical Care</option>
                <option value="education">Education</option>
            </select><br><br>
            <input type="submit" name="submit" value="Add Event">
        </fieldset>
    </form>

    <a href="">Show Event List</a>
</body> -->
</body>
</html>