<?php
/**
 * Am going to test and use the Switch fucntionality
 * A rundom generated from 1 to 7
 * When 1 is generated the first day of the week is generated, 
 * And respectively to the last day of the wwek, 7
 * */

//Generating a day of the week.
$Day = rand(1, 7);

$weekdays = [
    1 => 'Sunday',
    2 => 'Monday',
    3 => 'Tuesday',
    4 => 'Wednesday',
    5 => 'Thursday',
    6 => 'Friday',
    7 => 'Saturday',
];

$TasksPerDay = [
    1 => 'Today is the day of resting and you will be going to church',
    2 => 'Attend Your Lectures Today most of the time you are free, therefore use your time well',
    3 => 'You are having Prayer and Fasting Today for the Second years Committee',
    4 => 'You should be having Prayer and fasting for Christian Union',
    5 => 'You should be having prayer and fasting for the Evangelistic Your Team',
    6 => 'Attend the fellowship for the Christian Union',
    7 => 'Attended Fellowship for The Evangelistic group',
];

echo "Today is a " . $weekdays[$Day] . "<br>";
echo $TasksPerDay[$Day] . "<br>";

// Database connection
$connection = mysqli_connect('localhost', 'root', '', 'phpdb');

if (!$connection) {
    die('Failed to connect to the database: ' . mysqli_connect_error());
}

// Inserting data into the database
$statement = mysqli_prepare($connection, "INSERT INTO today (randday, dayofweek, task) VALUES (?, ?, ?)");

if (!$statement) {
    die('Prepare failed: ' . mysqli_error($connection));
}

mysqli_stmt_bind_param($statement, 'iss', $Day, $weekdays[$Day], $TasksPerDay[$Day]);

if (mysqli_stmt_execute($statement)) {
    echo "Record Saved Successfully to the Table in the database.<br>";
} else {
    echo "Error saving record: " . mysqli_error($connection) . "<br>";
}

// Closing the statement and connection
mysqli_stmt_close($statement);
mysqli_close($connection);

?>
