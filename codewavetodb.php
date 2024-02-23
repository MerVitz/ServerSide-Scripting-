<?php
/**
 * In this file I will be connecting the mysql database
 * to this form, such that the data from the form is 
 * stored to the database.
 */
ini_set('display_errors', 1);
error_reporting(E_ALL);

$conn = mysqli_connect('localhost', 'root', '', 'codewavedb');

if (!$conn) {
    die('Failed to connect to the database: ' . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST)) {
    $fname = isset($_POST['fname']) ? $_POST['fname'] : '';
    $femail = isset($_POST['femail']) ? $_POST['femail'] : '';
    $fage = isset($_POST['fage']) ? $_POST['fage'] : NULL;
    $frole = isset($_POST['frole']) ? $_POST['frole'] : '';
    $frecommend = isset($_POST['frecommend']) ? $_POST['frecommend'] : '';
    $floved = isset($_POST['floved']) ? $_POST['floved'] : [];
    if (!is_array($floved)) {
        $floved = [$floved]; // Wrap the single value in an array
    }
    $floved = implode(',', $floved);
    $fcomments = isset($_POST['fcomments']) ? $_POST['fcomments'] : '';

    $stmt = $conn->prepare("INSERT INTO survey (sname, semail, sage, srole, srecommend, sloved, scomment) VALUES (?, ?, ?, ?, ?, ?, ?)");
    if (!$stmt) {
        die('Prepare failed: ' . $conn->error);
    }
    $stmt->bind_param("ssissss", $fname, $femail, $fage, $frole, $frecommend, $floved, $fcomments, );

    if ($stmt->execute()) {
        // Redirect with success message before any output
		header('Location: /myPHP_Scripts/staticfiles/?success=1');
		exit();
    } else {
        echo "Error saving record: " . $conn->error;
    }

    $stmt->close();
} else {
    echo "No data submitted.";
}

$conn->close();
?>
