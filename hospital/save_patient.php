<?php
require 'db.php';

$patient_id     = mysqli_real_escape_string($conn, $_POST['patient_id']);
$patient_name   = mysqli_real_escape_string($conn, $_POST['patient_name']);
$age            = mysqli_real_escape_string($conn, $_POST['age']);
$gender         = mysqli_real_escape_string($conn, $_POST['gender']);
$insurance      = mysqli_real_escape_string($conn, $_POST['insurance']);
$admission_date = mysqli_real_escape_string($conn, $_POST['admission_date']);
$checkout_date  = mysqli_real_escape_string($conn, $_POST['checkout_date']);

$sql = "INSERT INTO patients (patient_id, patient_name, age, gender, insurance, admission_date, checkout_date)
        VALUES ('$patient_id', '$patient_name', '$age', '$gender', '$insurance', '$admission_date', '$checkout_date')";

if (mysqli_query($conn, $sql)) {
    echo "<p style='color:green; font-family:sans-serif;'>Patient registered successfully!</p>";
    echo "<a href='patient.html'>Go Back</a>";
} else {
    echo "<p style='color:red; font-family:sans-serif;'>Error: " . mysqli_error($conn) . "</p>";
    echo "<a href='patient.html'>Go Back</a>";
}

mysqli_close($conn);
?>
