<?php
$name=$_POST['name'];
$contactNumber=$_POST['contactNumber'];
$email=$_POST['email'];
$residence=$_POST['residenceCountry'];
$coast=$_POST['coast'];
$maasaimara=$_POST['maasaimara'];
$tsavo=$_POST['tsavo'];
$amboseli=$_POST['amboseli'];
$lNakuru=$_POST['lNakuru'];
$mtkenya=$_POST['mtKenya'];
$nairobiNP=$_POST['nairobiNP'];
$olPejetacon=$_POST['olPejetaCon'];
$hellsGate=$_POST['hellsGate'];
$date=$_POST['date'];
$noNights=$_POST['noNights'];
$noNights=$_POST['noNights'];
$budget=$_POST['budget'];
$wildlife=$_POST['wildlife'];
$birdwatching=$_POST['birdwatching'];
$beach=$_POST['beach'];
$diving=$_POST['diving'];
$adventure=$_POST['adventure'];
$relaxation=$_POST['relaxation'];
$artsculture=$_POST['artsculture'];
$history=$_POST['history'];
$photography=$_POST['photography'];
$cuisine=$_POST['cuisine'];
$hickingandcllmbing=$_POST['hickingandclimbing'];
$honeymoon=$_POST['honeymoon'];
$addmessage=$_POST['addmessage'];

// Establishment of connection
include 'dbconnection.php';

// SQL query
$sql = "INSERT INTO kipepeo_contactsfield (name, contact_number, email, residence, coast, maasaimara, tsavo, amboseli, lNakuru, mtkenya, nairobiNP, olPejetacon, hellsGate, date, no_nights, budget, wildlife, birdwatching, beach, diving, adventure, relaxation, artsculture, history, photography, cuisine, hickingandcllmbing, honeymoon, additional_message) 
        VALUES ('$name', '$contactNumber', '$email', '$residence', '$coast', '$maasaimara', '$tsavo', '$amboseli', '$lNakuru', '$mtkenya', '$nairobiNP', '$olPejetacon', '$hellsGate', '$date', '$noNights', '$budget', '$wildlife', '$birdwatching', '$beach', '$diving', '$adventure', '$relaxation', '$artsculture', '$history', '$photography', '$cuisine', '$hickingandcllmbing', '$honeymoon', '$addmessage')";

// Execution of SQL query
if (mysqli_query($conn, $sql)) {
    echo "Data inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// disconnection of db
mysqli_close($conn);
?>