<?php
// Establish database connection
$host = "localhost";
$username = "root";
$password = "";
$database = "registration";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Retrieve form data
$nam = $_POST['nam'];
$email = $_POST['email'];
$addres = $_POST['addres'];
$cnic = $_POST['cnic'];
$gender = $_POST['gender'];
$matric_marks = $_POST['matric_Marks'];
$inter_marks = $_POST['inter_Marks'];
$phone = $_POST['phone'];
$dob = $_POST['dob'];
$degree = $_POST['degree'];
// Retrieve other form fields similarly
// Insert data into the database
$sql = "INSERT INTO students (nam, email,addres, cnic, gender, matric_marks, inter_marks, phone, dob, degree)
        VALUES ('$nam', '$email', '$addres', '$cnic', '$gender', '$matric_marks', '$inter_marks', '$phone', '$dob', '$degree')";
if ($conn->query($sql) === TRUE) {
   // echo "Record inserted successfully";
    header("Location: pageafterdata.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
