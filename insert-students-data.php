<?php

$si = $_POST['student_id'];
$fn = $_POST['first_name'];
$ln = $_POST['last_name'];
$dob = $_POST['date_of_birth'];
$email = $_POST['email'];
$dnt = $_POST['department'];



/*
if($email == "hackmail.com"){

    echo "Please you can't be registerd";
}else{

    echo "You can be registerd";
}

*/

//Connecting database

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php_task";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO students VALUES ('','$si','$fn','$ln','$dob','$email','$dnt')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }






?>