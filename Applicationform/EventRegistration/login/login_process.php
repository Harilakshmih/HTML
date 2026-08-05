<?php

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "admin")
{
    if ($password == "1234")
    {
        echo "<h2 style='color:green;'>Login Successful</h2>";
        echo "<h3>Welcome to the Event Registration System</h3>";
        echo "<br>";
        echo "<a href='../home/index.php'>Go to Home</a>";
    }
    else
    {
        echo "<h2 style='color:red;'>Incorrect Password!</h2>";
        echo "<br>";
        echo "<a href='login.php'>Try Again</a>";
    }
}
else
{
    echo "<h2 style='color:red;'>Username Not Found!</h2>";
    echo "<br>";
    echo "<a href='login.php'>Try Again</a>";
}

?>