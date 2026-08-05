<!DOCTYPE html>
<html>
<head>
<title>Event Registration</title>
<link rel="stylesheet" href="../css/style.css">
</head>

<body>

<h2>Event Registration Form</h2>

<form action="register_process.php" method="POST">

Full Name<br>
<input type="text" name="fullname" required><br><br>

Email<br>
<input type="email" name="email" required><br><br>

Phone Number<br>
<input type="text" name="phone" required><br><br>

Event<br>
<select name="event">
<option>Technical Symposium</option>
<option>Workshop</option>
<option>Cultural Fest</option>
<option>Sports Meet</option>
</select>

<br><br>

College Name<br>
<input type="text" name="college" required><br><br>

<input type="submit" value="Register">

</form>

</body>
</html>