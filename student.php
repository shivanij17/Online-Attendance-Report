<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dtbss";



$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "UPDATE students3 SET attd='$_POST[st1]' WHERE rollno='14it1000'";

if ($conn->query($sql) === TRUE) {
    
} else {
    
}

$sql1 = "UPDATE students3 SET attd='$_POST[st2]' WHERE rollno='14it1001'";

if ($conn->query($sql1) === TRUE) {
    
} else {
    
}

$sql2 = "UPDATE students3 SET attd='$_POST[st3]' WHERE rollno='14it1002'";

if ($conn->query($sql2) === TRUE) {
    
} else {
    
}

$sql3 = "UPDATE students3 SET attd='$_POST[st4]' WHERE rollno='14it1003'";

if ($conn->query($sql3) === TRUE) {
    
} else {
    
}

$sql4 = "UPDATE students3 SET attd='$_POST[st5]' WHERE rollno='14it1004'";

if ($conn->query($sql4) === TRUE) {
    
} else {
    
}

$sql5 = "UPDATE students3 SET attd='$_POST[st6]' WHERE rollno='14it1005'";

if ($conn->query($sql5) === TRUE) {
    
} else {
    
}

$sql6 = "UPDATE students3 SET attd='$_POST[st7]' WHERE rollno='14it1006'";

if ($conn->query($sql6) === TRUE) {
    
} else {
    
}

$sql7 = "UPDATE students3 SET attd='$_POST[st8]' WHERE rollno='14it1007'";

if ($conn->query($sql7) === TRUE) {
    
} else {
    
}

$sql8 = "UPDATE students3 SET attd='$_POST[st9]' WHERE rollno='14it1008'";

if ($conn->query($sql8) === TRUE) {
    
} else {
    
}


?>

<html>
<head>
<title>success</title>
<link href="site.css" rel="stylesheet">
</head>
<body>
<nav id="nav01"></nav>
<div id="main">
<script src="script.js"></script>
<h1>Data Successfully submitted!</h1>
<br>
Go back to the home page <a href="index1.php">HOME</a>
</h3>
</div>
</body>
</html>