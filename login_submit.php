<?php

require  'includes/common.php';
$email= mysqli_real_escape_string($con,filter_input(INPUT_POST,'email'));
$password= md5(mysqli_real_escape_string($con,filter_input(INPUT_POST,'password')));
//$password=md5($password);
$users_query="select id,name from users where email='$email' and password='$password'";
$users_query_result=mysqli_query($con,$users_query) or die(mysqli_error($con));
//$rows_fetched=mysqli_num_rows($users_query_result);
//echo $rows_fetched;

//echo $row[0]." ";
//echo $row['name'];
//$var=$row['email'];

if(mysqli_num_rows($users_query_result)==0){   
    echo 'invalid creditials';
}
else{
 //   echo 'welcome';
//    $row= mysqli_fetch_array($users_query_result);
//  
    //session_start();
    $row = mysqli_fetch_array($users_query_result);
    $_SESSION['email'] = $email; //or we can use directly $email we got from login
    $_SESSION['id']= $row['id'];
    if(!isset($_SESSION['email']))
    {
        header('location:index.php');
    }
 else {
     header('location:products.php');
 }
}
?>