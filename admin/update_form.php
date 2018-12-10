<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update form user</title>
</head>
<style>
.update-input {
    margin: auto;
    width: 20%;
}
.update-button{
    background:#37435B;
    color:#fff;
    margin:auto;
}

.update-form input{
    padding: 10px 28px;
    border: 1px solid #BDCBD9;
    font-size: 17px;
    font-family: tahoma;
    border-radius: 5px;
    display :block;
    width: 82%;
}
input.update-form{
    padding: 10px 28px;
    border: 1px solid #BDCBD9;
    font-size: 17px;
    font-family: tahoma;
    border-radius: 5px;
}
.update-form {
    margin-top:20px;
}
.update-input>.update-button {
    margin: auto;
    display: block;
    width: 60%;
    margin-top: 20px;
}
.update-form label{
    margin:5px 0px;
    font-size: 17px;
    display:block;
    font-family: tahoma;
}
</style>
<body>
<h2 style="text-align:center;margin-bottom: 5%;">Update Your information</h2>
<form action="../inc/update.php" method="POST">
                <div class="update-input">
                <div class="Reg-row update-form">
                    <label for="fullname" class="Res-label">Full Name</label>
                    <input type="text" class="reg-input" id="fullname" name="fullname" placeholder="Enter full name">
                </div>
                <div class="Reg-row update-form">
                    <label for="email" class="Reg-label">Email</label>
                    <input type="email" name="email"class="reg-input" id="email" placeholder="Enter Your Email">
                </div>
                <div class="Reg-row update-form">
                    <label for="number" class="Reg-label">Age</label>
                    <input type="number" class="reg-input" id="age" name="age" placeholder="Enter Your Age">
                </div>
                <div class="Reg-row update-form">
                    <label for="date" class="Reg-label">Date of Birth</label>
                    <input type="date" id="mydate" name="birthday" class="reg-input" value="-Select-">
                </div>
                <!-- <button class="btn update-form">Update</button> -->
                <input type="submit" class="update-form update-button" value="Update">
                </div>
            </form>
</body>
</html>
