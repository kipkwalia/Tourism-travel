<?php
$firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];
$email=$_POST['email'];
$nationality=$_POST['nationality'];
$phoneNumber=$_POST['phoneNumber'];
$safariType=$_POST['safariType'];
$adults=$_POST['adults'];
$children=$_POST['children'];
$date=$_POST['date'];
$estbudget=$_POST['estbudget'];
$message=$_POST['message'];
$submit=$_POST['Submit'];
echo "Data from the form picked successfully</br>";

// connection to db
include 'dbconnection.php';

// SQL query
$sql = "INSERT INTO safari_booking (first_name, last_name, email, nationality, phone_number, safari_type, adults, children, date, est_budget, message) 
        VALUES ('$firstName', '$lastName', '$email', '$nationality', '$phoneNumber', '$safariType', '$adults', '$children', '$date', '$estbudget', '$message')";

// Execution of SQL query
if (mysqli_query($conn, $sql)) {
    echo "Data inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// disconnectiion from db
mysqli_close($conn);
?>