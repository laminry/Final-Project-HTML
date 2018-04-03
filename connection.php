<?php

if($_POST){
$dbuser = "root";
$dbpassword = "enter"; 
$hostname = "localhost";
$db = "final";
    $username = $_POST['inname'];
    $password = $_POST['inpassword'];

    $conn = mysql_connect($hostname, $dbuser, $dbpassword);
    $query = "SELECT * FROM operators WHERE username = '$username' AND password ='$password'";

    $result = mysqli_query($conn, $query);

    if (mysql_num_rows($result) == 1){
        session_start();
        $_SESSION['final'] = 'true';
echo"true";
        // header ("location: dashboard.html");
    }
    else {
        echo "Wrong";
    }

}
?>