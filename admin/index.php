<?php 
session_start();


if(!isset($_SESSION['Username'])){
    header('location: ../index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index Page</title>
</head>
<style>

.logout a {
    font-size: 20px;
    text-decoration: none;
    background: #37435B;
    padding: 8px 20px;
    border-radius: 6px;
    color: #fff;
    width: 100%;
    display: block;
    font-family: tahoma;
}
.logout {
    margin: auto;
    text-align: center;
    margin-top: 18px;
    width: 100%;
}
.user_box {
    width: 60%;
    margin: auto;
    margin-top: 80px;
}
.profileinfo {
    margin: 14px 0px;
    font-size: 22px;
    font-family: tahoma;
}
.user-information {
    width: 50%;
    display: inline-block;
}
.action-area {
    width: 49%;
    display: inline-block;
}

</style>
<body>

<h2 style="text-align:center;">Welcome! You Are Successfully Login</h2>
<div class="user_box">

<div class="user-information">
<div class="username profileinfo">My Name: <?php echo $_SESSION['Username']; ?></div>
<div class="myemail profileinfo">MY Email: <?php echo $_SESSION['Email']; ?></div>
<div class="myage profileinfo">My Age: <?php echo $_SESSION['Age']; ?></div>
<div class="birthday profileinfo">My Birthday: <?php echo $_SESSION['Birthday']; ?></div>
</div>



<div class="action-area">
    <div class="logout"><a href="../inc/logout.php">Logout</a></div>
    <div class="logout"><a href="../inc/delete.php">Delete Your Information</a></div>

    <div class="logout"><a href="update_form.php">Edit Your Information</a></div>
</div>

    
</div>
</body>
</html>