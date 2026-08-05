<?php

echo "<h2>Registration Successful</h2>";

echo "<b>Full Name:</b> ".$_POST['fullname']."<br><br>";
echo "<b>Email:</b> ".$_POST['email']."<br><br>";
echo "<b>Phone:</b> ".$_POST['phone']."<br><br>";
echo "<b>Event:</b> ".$_POST['event']."<br><br>";
echo "<b>College:</b> ".$_POST['college']."<br><br>";

echo "<h3>Thank you for registering!</h3>";

echo "<a href='../home/index.php'>Back to Home</a>";

?>