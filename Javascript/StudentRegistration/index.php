<!DOCTYPE html>
<html>
<head>
    <title>Student Registration Form</title>

    <!-- External CSS -->
    <link rel="stylesheet" href="FormStyle.css">
</head>
<body>

<div class="container">

<h2 id="title">Student Registration Form</h2>

<form action="" method="post">

    <label>Name</label>
    <input type="text" name="name"
    value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>" required>

    <label>Email</label>
    <input type="email" name="email"
    value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>" required>

    <label>Phone Number</label>
    <input type="text" name="phone"
    value="<?php echo isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : ''; ?>" required>

    <label>Age</label>
    <input type="number" name="age" min="18" max="60"
    value="<?php echo isset($_POST['age']) ? htmlspecialchars($_POST['age']) : ''; ?>" required>

    <label>Password</label>
    <input type="password" name="password" required>

    <label>Confirm Password</label>
    <input type="password" name="confirm_password" required>

    <input type="submit" name="submit" value="Register">

</form>

<?php

if(isset($_POST['submit']))
{
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $age = trim($_POST['age']);
    $password = $_POST['password'];
    $confirm = $_POST['confirm_password'];

    echo "<div class='result'>";

    if(empty($name) || empty($email) || empty($phone) || empty($age) || empty($password) || empty($confirm))
    {
        echo "<p class='error'>All fields are required.</p>";
    }

    elseif(!preg_match("/^[A-Za-z ]+$/",$name))
    {
        echo "<p class='error'>Invalid Name. Only letters and spaces are allowed.</p>";
    }

    elseif(!filter_var($email,FILTER_VALIDATE_EMAIL))
    {
        echo "<p class='error'>Invalid Email Address.</p>";
    }

    elseif(!preg_match("/^[0-9]{10}$/",$phone))
    {
        echo "<p class='error'>Phone number must contain exactly 10 digits.</p>";
    }

    elseif($age < 18 || $age > 60)
    {
        echo "<p class='error'>Age must be between 18 and 60.</p>";
    }

    elseif(!preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9]).{8,}$/",$password))
    {
        echo "<p class='error'>Password must contain at least 8 characters, one uppercase letter, one lowercase letter and one number.</p>";
    }

    elseif($password != $confirm)
    {
        echo "<p class='error'>Passwords do not match.</p>";
    }

    else
    {
        echo "<script>alert('Successfully saved your Information');</script>";

        echo "<h3 class='success'>Registration Successful!</h3>";

        echo "<b>Name :</b> ".htmlspecialchars($name)."<br>";
        echo "<b>Email :</b> ".htmlspecialchars($email)."<br>";
        echo "<b>Phone :</b> ".htmlspecialchars($phone)."<br>";
        echo "<b>Age :</b> ".htmlspecialchars($age)."<br>";
    }

    echo "</div>";
}
?>

</div>

</body>
</html>