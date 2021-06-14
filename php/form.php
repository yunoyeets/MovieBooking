<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
</head>
<style>
div{text-align: center; position: relative; top:145px ;}
</style>
<body text="blue">
<?php
$_SESSION['user']="KUNJ";
echo "SESSION INFO SET SUCCESSFULLY"."</br>";
?>
<div>


<form action="registration.php" method="POST">
<h1>REGISTRATION FORM</h1>
firstname:
<input type="text"name="firstname"><br><br>
middlename:
<input type="text"name="middlename"><br><br>
lastname:
<input type="text"name="lastname"><br><br>


email:
<input type="text"name="email"><br><br>
password:
<input type="password"name="pass"><br><br>
pincode:
<input type="text"name="pin"><br><br>
city:
<input type="text"name="ct"><br><br>
address:
<input type="text"name="address"><br><br>



mobile:
<input type="text"name="mobile"><br><br><br>
gender:
<br><br><input type="radio" id="male" name="gender" value="male">
<label for="male">Male</label>
 <input type="radio" id="female" name="gender" value="female">
<label for="female">Female</label>
 <input type="radio" id="other" name="gender" value="other">
<label for="male">others</label></br>

<br><input type="submit" value="login">
<a href="session2.php">PLEASE VISIT NEXT PAGE.THANKYOU!</a>
</form>

</div> 
</body>
</html>