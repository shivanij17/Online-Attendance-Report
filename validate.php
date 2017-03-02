<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dtbss";



$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$rollno=$_POST["rollno"];
$batch=$_POST["batch"];

$errormessage = "";

$sql="SELECT*FROM students3 where rollno='$rollno' and batch='$batch'";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);
if($result->num_rows == 0)
  {
    header("Location: loginerror.html");
  }
else
  { 
    echo "<head>";
    echo "<title> Login Success </title>";
    echo "<link href='site.css' rel='stylesheet'>";
    echo "<nav id='nav01'></nav>";
    echo "<div id='main'>";
    echo "<script src='script.js'></script>";
    echo "<h1>Welcome ".$row['rollno']."!</h1>";
    echo "<h2>Your Attendance is:</h2>";
    echo "<h2>".$row['attd']."%</h2>";
    
    
    
   
  }
?>

