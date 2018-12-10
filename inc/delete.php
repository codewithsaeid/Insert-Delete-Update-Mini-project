<?php
session_start();

if(!isset($_SESSION['Username'])){
    header('location: ../index.php');
}

// $servername = "localhost";
// $username = "username";
// $password = "password";
// $dbname = "myDB";

// Create connection
$connect = mysqli_connect('localhost','root','','project');
// Check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "DELETE FROM user_info WHERE id='".$_SESSION['id']."'";

if (mysqli_query($connect, $sql)) {
    echo "Record deleted successfully";
    header('location: ../index.php');
} else {
    echo "Error deleting record: " . mysqli_error($connect);
}

mysqli_close($connect);
?>