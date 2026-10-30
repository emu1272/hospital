<?php
require 'db.php';

$test_id     = mysqli_real_escape_string($conn, $_POST['test_id']);
$test_name   = mysqli_real_escape_string($conn, $_POST['test_name']);
$test_date   = mysqli_real_escape_string($conn, $_POST['test_date']);
$test_time   = mysqli_real_escape_string($conn, $_POST['test_time']);
$test_result = mysqli_real_escape_string($conn, $_POST['test_result']);

$sql = "INSERT INTO medical_tests (test_id, test_name, test_date, test_time, test_result)
        VALUES ('$test_id', '$test_name', '$test_date', '$test_time', '$test_result')";

if (mysqli_query($conn, $sql)) {
    echo "<p style='color:green; font-family:sans-serif;'>Medical test registered successfully!</p>";
    echo "<a href='test.html'>Go Back</a>";
} else {
    echo "<p style='color:red; font-family:sans-serif;'>Error: " . mysqli_error($conn) . "</p>";
    echo "<a href='test.html'>Go Back</a>";
}

mysqli_close($conn);
?>
