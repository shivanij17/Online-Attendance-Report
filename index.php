<?php
$servername = "localhost";
$username = "root";
$password = "";


$conn = @new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "CREATE DATABASE dtbss";
if ($conn->query($sql) === TRUE) {
    
} else {
    
}

$dbname = "dtbss";

$conn = @new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql1="SELECT*FROM admin";
$result = $conn->query($sql1);
$row = mysqli_fetch_array($result);
if($result->num_rows == 0)
  {

$sql = "CREATE TABLE students3 (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
rollno VARCHAR(8) NOT NULL,
batch VARCHAR(2),
attd INT(10)
)";

if (mysqli_query($conn, $sql)) {
    
} else {
    
}
$sql3 = "INSERT INTO students3 (rollno, batch, attd)
VALUES ('14it1000', 'a1', '0')";
if ($conn->query($sql3) === TRUE) {
    
} else {
    
}

$sql4 = "INSERT INTO students3 (rollno, batch, attd)
VALUES ('14it1001', 'a1', '0')";
if ($conn->query($sql4) === TRUE) {
    
} else {
    
}

$sql5 = "INSERT INTO students3 (rollno, batch, attd)
VALUES ('14it1002', 'a1', '0')";
if ($conn->query($sql5) === TRUE) {
    
} else {
    
}

$sql6 = "INSERT INTO students3 (rollno, batch, attd)
VALUES ('14it1003', 'a2', '0')";
if ($conn->query($sql6) === TRUE) {
    
} else {
    
}

$sql7 = "INSERT INTO students3 (rollno, batch, attd)
VALUES ('14it1004', 'a2', '0')";
if ($conn->query($sql7) === TRUE) {
    
} else {
    

}

$sql8 = "INSERT INTO students3 (rollno, batch, attd)
VALUES ('14it1005', 'a2', '0')";
if ($conn->query($sql8) === TRUE) {
    
} else {
    

}

$sql9 = "INSERT INTO students3 (rollno, batch, attd)
VALUES ('14it1006', 'a3', '0')";
if ($conn->query($sql9) === TRUE) {
    
} else {
    
}

$sql10 = "INSERT INTO students3 (rollno, batch, attd)
VALUES ('14it1007', 'a3', '0')";
if ($conn->query($sql10) === TRUE) {
    
} else {
    

}

$sql11 = "INSERT INTO students3 (rollno, batch, attd)
VALUES ('14it1008', 'a3', '0')";
if ($conn->query($sql11) === TRUE) {
    
} else {
    

}

$sql1 = "CREATE TABLE admin (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
id1 VARCHAR(10) NOT NULL,
password VARCHAR(10) NOT NULL
)";

if (mysqli_query($conn, $sql1)) {
    
} else {
    
}

$sql2 = "INSERT INTO admin (id1, password)
VALUES ('admin@66', 'admin1122')";
if ($conn->query($sql2) === TRUE) {
    
} else {
    echo "Error: " . $sql2 . "<br>" . $conn->error;

}

}

else
{
}
?>


<html>

<head>
<title>ATTENDANCE</title>
<link href="site.css" rel="stylesheet">
</head>

<body>
<img src="logo3.png" width="1343" height="150">
                                                                               
<nav id="nav01"></nav>
<div id="main">
<h1>ATTENDANCE REPORT</h1>
<h2>SE IT </h2>

<script src="script.js"></script>         
<fieldset style="width:30%" color="#9F1C32"><legend><b>LOGIN</b></legend>
<br>
<form name="login" method="post" action="validate.php">
Roll No. : <input type="text" name="rollno" required><br><br>
Batch : <input type="text" name="batch" required><br><br>
<input type="Submit" value="Login"><br><br>
</form>     
                        
  
</div>
</body>
</html> 