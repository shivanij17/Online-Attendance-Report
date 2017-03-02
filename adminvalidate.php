<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dtbss";



$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

$rollno=$_POST["id"];
$password=$_POST["pass"];

$errormessage = "";

$sql="SELECT*FROM admin where id1='$rollno' and password='$password'";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);
if($result->num_rows == 0)
  {
    header("Location: adminerror.html");
  }
else
  { 
    header("Location: admin.html");
  }

?>