<?php
// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "university";

$connecting = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($connecting->connect_error) {
    die("Connection failed: " . $connecting->connect_error);
}

// Collect data from form
$adminNo = $_POST['adminNo'];
$name = $_POST['name'];
$age = $_POST['age'];
$program = $_POST['program'];

// Prepare SQL statement
$sql = "INSERT INTO students (adminNo, name, age, program) VALUES ('$adminNo', '$name', $age, '$program')";

// Execute SQL statement
if ($connecting->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $connecting->error;
}

// Close database connection
$connecting->close();
?>
