<?php
require 'includes/common.php';
$name=mysqli_real_escape_string($con,$_POST['name']);
$email=mysqli_real_escape_string($con,$_POST['email']);
$password=mysqli_real_escape_string($con,$_POST['password']);
$newpassword=md5($password);
$contact=$_POST['contact'];
$city=mysqli_real_escape_string($con,$_POST['city']);
$address=mysqli_real_escape_string($con,$_POST['address']);
$email_duplicate_query="select id from users where email='$email'";
$email_duplicate_query_result= mysqli_query($con, $email_duplicate_query) or die(mysqli_error($con));

if(mysqli_num_rows($email_duplicate_query_result)>0)
{
    echo 'email already exists, please go back and try some another email address';
}
 else {
    $insert_query="insert into users(name,email,password,contact,city,address) values('$name','$email','$newpassword','$contact','$city','$address')";
    $insert_query_result=mysqli_query($con,$insert_query) or die(mysqli_error($con));
    $_SESSION['email']=$email;
    $_SESSION['id']=mysqli_insert_id($con);
    
    if(isset($_SESSION['email']))
    {
        header('location:products.php');
    }
   
}
?>