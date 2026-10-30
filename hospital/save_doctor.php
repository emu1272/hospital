<?php
require 'db.php';

$doctor_id      = mysqli_real_escape_string($conn, $_POST['doctor_id']);
$doctor_name    = mysqli_real_escape_string($conn, $_POST['doctor_name']);
$age            = mysqli_real_escape_string($conn, $_POST['age']);
$gender         = mysqli_real_escape_string($conn, $_POST['gender']);
$specialization = mysqli_real_escape_string($conn, $_POST['specialization']);
$phone          = mysqli_real_escape_string($conn, $_POST['phone']);

$sql = "INSERT INTO doctors (doctor_id, doctor_name, age, gender, specialization, phone)
        VALUES ('$doctor_id', '$doctor_name', '$age', '$gender', '$specialization', '$phone')";

if (mysqli_query($conn, $sql)) {
    echo "<p style='color:green; font-family:sans-serif;'>Doctor registered successfully!</p>";
    echo "<a href='doctor.html'>Go Back</a>";
} else {
    echo "<p style='color:red; font-family:sans-serif;'>Error: " . mysqli_error($conn) . "</p>";
    echo "<a href='doctor.html'>Go Back</a>";
}

mysqli_close($conn);
?>
