<?php

$connect = mysqli_connect('localhost','root','','project');

 $full_name = $_POST['fullname'];
 $email = $_POST['email'];
 $age = $_POST['age'];
 $pass = $_POST['password'];
     $repassword = $_POST['repassword'];
 $birthday = $_POST['birthday'];

if($full_name && $email && $pass){
    if($pass==$repassword){
        mysqli_query($connect,"INSERT INTO user_info(fullname,email,age,pass,birthday)VALUES('$full_name','$email','$age','$pass','$birthday')");
    }
    else "Pass duita mile nai";
}


header('location: ../index.php');
