<?php
session_start();
// Create connection
$connect = mysqli_connect('localhost','root','','project');


$full_name = $_POST['fullname'];
$email = $_POST['email'];
$age = $_POST['age'];
$birthday = $_POST['birthday'];
// Check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "UPDATE user_info SET fullname = '$full_name', email ='$email', age = '$age', birthday = '$birthday'
WHERE id='".$_SESSION['id']."'";


if (mysqli_query($connect, $query)) {
    echo "Record updated successfully";
    header('location: ../index.php');
} else {
    echo "Error updating record: " . mysqli_error($connect);
}

mysqli_close($connect);

session_destroy();
?>