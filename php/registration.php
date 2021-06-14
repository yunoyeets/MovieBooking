<?php


    if($_SERVER["REQUEST_METHOD"]=="POST"){
    $firstname=$_POST['firstname'];
    if(empty($firstname)){
        echo "COMPULSORY TO ENTER NAME"."<br>"."<br>";

    }
    
    elseif(!preg_match("/^[a-zA-Z]*$/",$firstname)){
        echo"only white space and alphabets are allowed"."<br>"."<br>";
    }
    else{
        echo"Then name entered is : $firstname"."<br>"."<br>";
    }
    $middlename=$_POST['middlename'];
    if(empty($middlename)){
        echo "COMPULSORY TO ENTER NAME"."<br>"."<br>";

    }
    
    elseif(!preg_match("/^[a-zA-Z]*$/",$middlename)){
        echo"only white space and alphabets are allowed"."<br>"."<br>";
    }
    else{
        echo"Then name entered is : $middlename"."<br>"."<br>";
    }
    $lastname=$_POST['lastname'];
    if(empty($lastname)){
        echo "COMPULSORY TO ENTER NAME"."<br>"."<br>";

    }
    
    elseif(!preg_match("/^[a-zA-Z]*$/",$lastname)){
        echo"only white space and alphabets are allowed"."<br>"."<br>";
    }
    else{
        echo"Then name entered is : $lastname"."<br>"."<br>";
    }
    $email=$_POST['email'];
    if(empty($email)){
        echo "MANDATORY TO ENTER EMAIL"."<br>"."<br>";
    }
    elseif(!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^",$email)){
        echo"email id entered is not valid"."<br>"."<br>";
    }
    else{
        echo"the email entered is: $email"."<br>"."<br>";
    }
    $mobile=$_POST['mobile'];
    if(empty($mobile)){
        echo "MOBILE NUMBER IS MANDATORY"."<br>"."<br>";
    }
    elseif(!preg_match("/^[0-9]{10}+$/",$mobile)){
        echo "the mobile number added is invalid"."<br>"."<br>";
    }
    else {
        echo"the mobile entered is: $mobile"."<br>"."<br>";
    }
    $pin=$_POST['pin'];
    if(empty($pin)){
        echo "PIN NUMBER IS MANDATORY"."<br>"."<br>";
    }
    elseif(!preg_match("/^[0-9]{6}+$/",$pin)){
        echo "the pincode added is invalid"."<br>"."<br>";
    }
    else {
        echo"the mobile entered is: $pin"."<br>"."<br>";
    }
}
?>

</body>
</html>
