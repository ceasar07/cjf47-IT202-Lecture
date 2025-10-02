<!DOCTYPE html>
<html>
<head>
<title>Unit 5 In-Class Exercise cjf47</title>
</head>
<body>
<h1>My Golfing Team</h1>
<h4>Name: Ceasar Flores</h4>
<h4>UCID: cjf47</h4>
<h4>Course and Section: IT-202-001 Internet Applications</h4>
<form name="games" action="Unit05Exercise_action_cjf47.php" method="post">
   <label>Golfer ID:</label>
   <input type="text" name="golferid">
   <br>
   <br>
   <label>Score:</label>
   <input type="number" name="score">
   <br>
   <br>
   <input type="submit">
</form>
<br>
<?php
date_default_timezone_set("America/New_York");
echo "The date and time is " . date("D M j h:i:sa T Y");
?>
</body>
</html>